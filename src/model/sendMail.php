<?php



function sendMail($carts, $total)
{

    $to = $_SESSION['mail'];

    $subject = 'Devis';

    $message = '<div class="container mb-5">';
    $message .= '<h2>Devis</h2>';
    $message .= '<div class="table-responsive">';
    $message .= '<table class="table" style="border-collapse: collapse;width: 100%;">';
    $message .= '<thead>';
    $message .= '<tr>';
    $message .= '<th scope="col" style="text-align: left;padding: 8px;background-color: #f2f2f2;border:1px solid black;">Product</th>';
    $message .= '<th scope="col" style="text-align: left;padding: 8px;background-color: #f2f2f2;border:1px solid black;">Price</th>';
    $message .= '<th scope="col" style="text-align: left;padding: 8px;background-color: #f2f2f2;border:1px solid black;">Quantity</th>';
    $message .= '<th scope="col" style="text-align: left;padding: 8px;background-color: #f2f2f2;border:1px solid black;">Total</th>';
    $message .= '</tr>';
    $message .= '</thead>';
    $message .= '<tbody>';
    foreach ($carts as $cart) {
        $message .= '<tr>';
        $message .= '<td style="text-align: left;padding: 8px;border:1px solid black;">' . $cart['name_products'] . '</td>';
        $message .= '<td class="price" style="text-align: left;padding: 8px;border:1px solid black;">$' . $cart['price'] . ' </td>';
        $message .= '<td style="text-align: left;padding: 8px;border:1px solid black;">';
        $message .= '<span class="quantity">' . $cart['quantity'] . '</span>';
        $message .= '</td>';
        $message .= '<td class="product-total-price" style="text-align: left;padding: 8px;border:1px solid black;">$' . ($cart['price'] * $cart['quantity']) . '</td>';
        $message .= '</tr>';
    }
    $message .= '<tr>';
    $message .= '<td colspan="3" class="text-right" style="text-align: left;padding: 8px;font-weight:bold;border:1px solid black;">Total</td>';
    $message .= '<td id="total" style="text-align: left;padding: 8px;font-weight:bold;font-size:2em;border:1px solid black;">$' . $total . ' </td>';
    $message .= '</tr>';
    $message .= '</tbody>';
    $message .= '</table>';
    $message .= '</div>';
    $message .= '</div>';


    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


    mail($to, $subject, $message, $headers);
}

function createOrder()
{
    $ident_customer = $_SESSION['ident_customer'];
    $mail = $_SESSION['mail'];
    $ident_orders = time();

    $stmt = dbConnect()->prepare('SELECT id FROM customers WHERE mail = :mail');
    $stmt->bindValue(':mail', $mail, PDO::PARAM_INT);
    $stmt->execute();
    $cartProducts = $stmt->fetch();
    $idCustomer = $cartProducts['id'];

    if (!empty($_POST['comment'] && isset($_POST['comment']))) {
        $comment = strip_tags(htmlspecialchars($_POST['comment']));
    } else {
        $comment = "";
    }

    $stmt = dbConnect()->prepare("UPDATE `cart` SET identifier_order = :identifier_order, comment = :comment, id_customer = :id_customer WHERE ident_customer = :ident_customer");

    $stmt->bindValue(":ident_customer", $ident_customer, PDO::PARAM_INT);
    $stmt->bindValue(":identifier_order", $ident_orders, PDO::PARAM_INT);
    $stmt->bindValue(":comment", $comment, PDO::PARAM_STR);
    $stmt->bindValue(":id_customer", $idCustomer, PDO::PARAM_INT);
    $stmt->execute();

    $carts = selectCart();
    foreach ($carts as $cart) {
        $stmt = dbConnect()->prepare("INSERT INTO orders (identifier_product, name_product, description_product, price_product, quantity_cart, comment_cart, identifier_order, id_customer) 
        VALUES (:identifier_product, :name_product, :description_product, :price_product, :quantity_cart, :comment_cart, :identifier_order, :id_customer )");

        $stmt->bindValue(":identifier_product", $cart['identifier'], PDO::PARAM_INT);
        $stmt->bindValue(":name_product", $cart['name_products'], PDO::PARAM_STR);
        $stmt->bindValue(":description_product", $cart['description'], PDO::PARAM_STR);
        $stmt->bindValue(":price_product", $cart['price']);
        $stmt->bindValue(":quantity_cart", $cart['quantity'], PDO::PARAM_INT);
        $stmt->bindValue(":comment_cart", $cart['comment'], PDO::PARAM_STR);
        $stmt->bindValue(":identifier_order", $ident_orders, PDO::PARAM_INT);
        $stmt->bindValue(":id_customer", $idCustomer, PDO::PARAM_INT);
        $stmt->execute();
    }

    $result = total();
    $total = $result[0];

    sendMail($carts, $total);
}
