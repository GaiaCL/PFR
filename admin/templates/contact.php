<?php $title = "Gestion des Messages Clients"; ?>
<?php ob_start();?>
<h1 style="box-shadow: none;margin-top:2em;">Gestion des Messages Clients</h1>
    <table class="table">
    <thead>
        <tr>
            <th class="col">Nom/Prénom</th>
            <th class="col">Mail</th>
            <th class="col">Message/Questions</th>
            <th class="col text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($contacts as $contact){
            ?>
            <tr>
            <td><?= $contact['lastname']?> &nbsp <?=$contact['firstname'] ?></td>
            <td><?=$contact['mail']?></td> 
            <td><?=$contact['question']?></td>               
            <td class="text-center">  
                <div><a href="index.php?page=answerContact&id= <?php echo $contact['id']?>"  style="background-color:black;padding:0.3em;color:white;border-radius:0.5em;">Repondre</a></div>
            </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<?php $content = ob_get_clean();
require('layoutAdmin.php');
?>