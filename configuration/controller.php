<?php
    class controller extends Database{
        public function tampilTable(){
            $mysqli = mysqli_connect($this->dbHost,$this->dbUser,$this->dbPass,$this->dbName);
            $tbName = 'laptop';
            $sql = "SELECT * FROM $tbName";
            $result = $mysqli->query($sql);
            while($d = $result->fetch_array()){
                echo '<tr>';
                echo "<td>$d[id]</td>";
                echo "<td>$d[tipe]</td>";
                echo "<td>$d[processor]</td>";
                echo "<td>$d[vga]</td>";
                echo "<td>$d[ram] GB</td>";
                echo "<td>$d[hdd] GB</td>";
                echo "<td>$d[ukuran]''</td>";
                echo "</tr>";
            }
            $mysqli->close();
        }

        public function dashboardPilihLaptop(){
            $mysqli = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
            $sql = "SELECT id, tipe FROM laptop";
            $query = $mysqli->query($sql);

            $i=0;
            while ($row = $query->fetch_array()) {
                if ($i == 0) {
                    echo "<tr>";
                    echo "<td><input type='checkbox' name='pilih[]' value='$row[0]' class='checkbox'><label>$row[1]</label></td>";
                    $i++;
                }
                else if ($i == 5) {
                    echo "<td><input type='checkbox' name='pilih[]' value='$row[0]' class='checkbox'><label>$row[1]</label></td>";
                    echo "</tr>";
                    $i=0;
                }
                else{
                    echo "<td><input type='checkbox' name='pilih[]' value='$row[0]' class='checkbox'><label>$row[1]</label></td>";
                    $i++;
                }
            }
        }
    }
?>    