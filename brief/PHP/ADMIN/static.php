<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../INCLUDE/Connect.php';
	include_once '../INCLUDE/Dheader.php';
?>
	<a href="skils.php" class="button back">Back</a>
	<?php
	$i = 1;
	if (isset($_POST['searche'])) {
		if (isset($_POST['HTML'])) {
	?>
			<h1>List Of Expert Developers in HTML</h1>
			<table>
				<thead>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
				</thead>
				<?php
				$sql =
					'SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE HTML = 5';
				$result = $pdo->query($sql);
				foreach ($result as $key => $row) : ?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $row['FirstName']; ?></td>
						<td><?php echo $row['LastName']; ?></td>
					</tr>
				<?php endforeach;
			} elseif (isset($_POST['JS'])) { ?>
				<h1>List Of Expert Developers in JS</h1>
				<table>
					<thead>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
					</thead>
					<?php
					$sql =
						'SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE JS = 5';
					$result = $pdo->query($sql);
					foreach ($result as $key => $row) : ?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $row['FirstName']; ?></td>
							<td><?php echo $row['LastName']; ?></td>
						</tr>
					<?php endforeach;
				} elseif (isset($_POST['CGI'])) { ?>
					<h1>List Of Expert Developers in CGI</h1>
					<table>
						<thead>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
						</thead>
						<?php
						$sql =
							'SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE CGI = 5';
						$result = $pdo->query($sql);
						foreach ($result as $key => $row) : ?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><?php echo $row['FirstName']; ?></td>
								<td><?php echo $row['LastName']; ?></td>
							</tr>
						<?php endforeach;
					} elseif (isset($_POST['PHP'])) { ?>
						<h1>List Of Expert Developers in PHP</h1>
						<table>
							<thead>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
							</thead>
							<?php
							$sql =
								'SELECT FirstName, LastName FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE HTML = 5 OR JS = 5 OR AJAX = 5 OR PHP = 5 OR CGI = 5';
							$result = $pdo->query($sql);
							foreach ($result as $key => $row) : ?>
								<tr>
									<td><?php echo $i++; ?></td>
									<td><?php echo $row['FirstName']; ?></td>
									<td><?php echo $row['LastName']; ?></td>

								</tr>
							<?php endforeach;
						} elseif (isset($_POST['PHP'])) { ?>
							<h1>List Of Expert Developers in CGI</h1>
							<table>
								<thead>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
								</thead>
								<?php
								$sql =
									'SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE PHP = 5';
								$result = $pdo->query($sql);
								foreach ($result as $key => $row) : ?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td><?php echo $row['FirstName']; ?></td>
										<td><?php echo $row['LastName']; ?></td>

									</tr>
							<?php endforeach;
							}
						} else {
							?>
							<h1>List Of Expert Multi Techno</h1>
							<table>
								<thead>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
								</thead>
								<?php
								$sql =
									'SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE HTML = 5';
								$result = $pdo->query($sql);
								foreach ($result as $key => $row) : ?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td><?php echo $row['FirstName']; ?></td>
										<td><?php echo $row['LastName']; ?></td>
									</tr>
							<?php endforeach;
							}
							?>
							</table>
							<form class="static-form" action="" method="POST">
								<label for="HTML">HTML :</label>
								<input class="f-input" type="radio" name="HTML" value="HTML">
								<label for="JS">JS :</label>
								<input class="f-input" type="radio" name="JS" value="JS">
								<label for="AJAX">AJAX :</label>
								<input class="f-input" type="radio" name="AJAX" value="AJAX">
								<label for="PHP">PHP :</label>
								<input class="f-input" type="radio" name="PHP" value="PHP">
								<label for="CGI">CGI :</label>
								<input class="f-input" type="radio" name="CGI" value="CGI">
								<input type="submit" name="searche" value="search" class="edit">
							</form>
							<?php
							$i = 1;
							if (isset($_POST['search'])) {
								if (isset($_POST['HTML'])) { ?>
									<h1>list of developers with an unknown level In HTML</h1>
									<table>
										<thead>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
										</thead>
										<?php
										$sql =
											'SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE HTML = -1';
										$result = $pdo->query($sql);
										foreach ($result as $key => $row) : ?>
											<tr>
												<td><?php echo $i++; ?></td>
												<td><?php echo $row['FirstName']; ?></td>
												<td><?php echo $row['LastName']; ?></td>
											</tr>
										<?php endforeach;
									} elseif (isset($_POST['JS'])) { ?>
										<h1>list of developers with an unknown level In JS</h1>
										<table>
											<thead>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
											</thead>
											<?php
											$sql =
												'SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE JS = -1';
											$result = $pdo->query($sql);
											foreach ($result
												as $key => $row) : ?>
												<tr>
													<td><?php echo $i++; ?></td>
													<td><?php echo $row['FirstName']; ?></td>
													<td><?php echo $row['LastName']; ?></td>
												</tr>
											<?php endforeach;
										} elseif (
											isset($_POST['AJAX'])
										) { ?>
											<h1>list of developers with an unknown level In AJAX</h1>
											<table>
												<thead>
													<th>#</th>
													<th>First Name</th>
													<th>Last Name</th>
												</thead>
												<?php
												$sql =
													'SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE AJAX = -1';
												$result = $pdo->query($sql);
												foreach ($result
													as $key => $row) : ?>
													<tr>
														<td><?php echo $i++; ?></td>
														<td><?php echo $row['FirstName']; ?></td>
														<td><?php echo $row['LastName']; ?></td>

													</tr>
												<?php endforeach;
											} elseif (
												isset($_POST['CGI'])
											) { ?>
												<h1>list of developers with an unknown level In PHP</h1>
												<table>
													<thead>
														<th>#</th>
														<th>First Name</th>
														<th>Last Name</th>
													</thead>
													<?php
													$sql =
														'SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE PHP = -1';
													$result = $pdo->query($sql);
													foreach ($result as $key => $row) : ?>
														<tr>
															<td><?php echo $i++; ?></td>
															<td><?php echo $row['FirstName']; ?></td>
															<td><?php echo $row['LastName']; ?></td>

														</tr>
													<?php endforeach;
												} elseif (
													isset($_POST['PHP'])
												) { ?>
													<h1>list of developers with an unknown level In CGI</h1>
													<table>
														<thead>
															<th>#</th>
															<th>First Name</th>
															<th>Last Name</th>
														</thead>
														<?php
														$sql =
															'SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE PHP = -1';
														$result = $pdo->query(
															$sql
														);
														foreach ($result
															as $key => $row) : ?>
															<tr>
																<td><?php echo $i++; ?></td>
																<td><?php echo $row['FirstName']; ?></td>
																<td><?php echo $row['LastName']; ?></td>

															</tr>
													<?php endforeach;
													}
												} else {
													?>
													<h1>list of developers with an unknown level In HTML</h1>
													<table>
														<thead>
															<th>#</th>
															<th>First Name</th>
															<th>Last Name</th>
														</thead>
														<?php
														$sql =
															'SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE HTML = -1';
														$result = $pdo->query(
															$sql
														);
														foreach ($result
															as $key => $row) : ?>
															<tr>
																<td><?php echo $i++; ?></td>
																<td><?php echo $row['FirstName']; ?></td>
																<td><?php echo $row['LastName']; ?></td>
															</tr>
													<?php endforeach;
													}
													?>
													</table>
													<form class="static-form" action="" method="POST">
														<label for="HTML">HTML :</label>
														<input class="f-input" type="radio" name="HTML" value="HTML">
														<label for="JS">JS :</label>
														<input class="f-input" type="radio" name="JS" value="JS">
														<label for="AJAX">AJAX :</label>
														<input class="f-input" type="radio" name="AJAX" value="AJAX">
														<label for="PHP">PHP :</label>
														<input class="f-input" type="radio" name="PHP" value="PHP">
														<label for="CGI">CGI :</label>
														<input class="f-input" type="radio" name="CGI " value="CGI">
														<input type="submit" name="search" value="search" class="edit">
													</form>
												<?php
											} else {
												header('location: index.php');
											}
