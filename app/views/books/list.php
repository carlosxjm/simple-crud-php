<h1>Books list</h1>

<table>
	<tr>
		<th>Title</th>
		<th>Author</th>
		<th>Synopsis</th>
	</tr>
	<?php foreach($books as $book) { ?>
		<tr>
			<td><?php echo $book['title'] ?></td>
			<td><?php echo $book['autor'] ?></td>
			<td><?php echo $book['synopsis'] ?></td>
		</tr>
	<?php } ?>
</table>
