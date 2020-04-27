


<form action="index.php?controller=artists&action=add" method="post" enctype="multipart/form-data">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name"/><br>

        <label for="biography">Bio</label>
        <textarea name="biography" id="biography"></textarea><br>

        <label for="image">Image</label>
        <input type="file" name="image" id="image"/><br>

        <input type="submit" value="Enregistrer"/>
</form>