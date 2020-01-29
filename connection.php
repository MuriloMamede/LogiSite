<?php

	class Connection
	{
		var $link;
		var $host;
		var $user;
		var $password;
		var $database;
		var $result = 0;

		function connect($host, $user, $password, $database)
		{
			$this->host = $host;
			$this->user = $user;
			$this->password = $password;
			$this->database = $database;

			$this->link = mysqli_connect($host, $user, $password, $database);

			if($this->link == FALSE)
				echo "Conexão falhou.".mysqli_connect_errno()." ".mysqli_connect_error() ;

			mysqli_set_charset($this->link,"utf8");
		}

		function query($query)
		{
			$result = mysqli_query($this->link, $query);

			if(is_bool($result) == TRUE)
			{
				if($result == TRUE)
				{
					if(mysqli_affected_rows($this->link) > 0)
						echo "Query executada com sucesso";
				}
				else
					if($result == FALSE)
					{
						echo "<br/>Erro";
						echo mysqli_error($this->link);
					}
			}
			else
				if(is_object($result) == TRUE)
				{
					$this->result = $result;
				}
		}

		function num_rows()
		{
			return mysqli_num_rows($this->result);
		}

		function fetch_row()
		{
			$row = mysqli_fetch_row($this->result);

			return $row;
		}

		function fetch_assoc()
		{
			$row = mysqli_fetch_assoc($this->result);

			return $row;
		}

		function fetch_array()
		{
			$row = mysqli_fetch_array($this->result, MYSQLI_BOTH);

			return $row;
		}

		

		function close()
		{
			mysqli_close($this->link);
		}

		
	}
?>
