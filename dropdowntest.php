<div class="form-group">
			<?php
				$result = "SELECT BName,BusinessID From business";
                $query_run = mysqli_query($conn,$result);
			?>
		    <label>Business</label>
			<Select name="Business" class="form-control" required>
				<?php
                while($rows =$query_run->fetch_assoc()) {
					$Bname = $rows['BName'];
					echo "<Option Value ='".$Bname."'>.$Bname</Option>";
				}
				?>
			</Select>
		</div>


        