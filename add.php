<?php
/**
 * Created by PhpStorm.
 * User: Son
 * Date: 14/02/2018
 * Time: 09:35
 */

?>

<a href="admin.php">Index</a>

<div class="create">
    <p>Add</p>

    <form class="add_form" action="actions/action_add.php" method="post">
        <input type="text"      name='name'         placeholder="name">
        <input type="text"      name='genre'        placeholder="genre">
        <input type="text"      name='url'      placeholder="url">
        <input type="text"      name='year'         placeholder="year">
        <input type="submit">
    </form>
</div>