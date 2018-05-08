<?php # Show all pokemon in pokedex

// Access session
//session_start();

// Display header
$page_title = 'Gen 1 Pokedex';
include('includes/header.html');

// Open database connection.
require('connect_db.php');

// Perform next a SQL query
$sql = ("SELECT * FROM pkmn;");

// run query
if(!($result = mysqli_query($dbc, $sql)))
{
	print("Could not show record! <br/>");
	die(mysqli_error());
}

// Print out table
print "<table border>";
print "<tr>
			<td>#</td>
			<td>Name</td>
			<td>Sprites</td>
			<td>Action Links</td>
	   </tr>";
	   
// Print out rows in table
for ($c = 0; $row = mysqli_fetch_row($result); $c++)
{	
	print ("<tr>");
	
	// ID & Name
	print ('<td>' . $row[0] . '</td>
			<td>' . $row[1] . '</td>');
	
	// Pics
	print ('<td>
				<figure>
					<img src="images/gen1/red-green/'. $row[0] .'.png" alt="'. $row[1] .'RGSprite">
					<figcaption>Green</figcaption>
				</figure>
				<figure>
					<img src="images/gen1/red-blue/'. $row[0] .'.png" alt="'. $row[1] .'RBSprite">
					<figcaption>Red/Blue</figcaption>
				</figure>
				<figure>
					<img src="images/gen1/yellow/'. $row[0] .'.png" alt="'. $row[1] .'YSprite">
					<figcaption>Yellow</figcaption>
				</figure>
			</td>');
		
	// Populate action links (haven't done this yet)
	print ('<td style=width:100px>
				<a href="showPkmn.php?ID=' . $row[0] . '" >More Info</a>
			</td>');	
			
	print ("</tr>");
}
print("</table>");


// Display footer
include('includes/footer.html');

?>