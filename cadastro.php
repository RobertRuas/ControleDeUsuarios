<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Controle de Usuarios - Cadastro</title>
</head>
<body>
	<<p>
		<h2>Cadastro de Usuarios</h2>

		<p>
		<?php
			//Formularios
		?>
		</p>


	</p>
</body>
</html>

<?php 

include("include/conexao.php");

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>