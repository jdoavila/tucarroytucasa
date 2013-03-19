<?php 
require_once('conexion/conexion.php');

if ($result = $mysqli->query("SELECT * FROM Marca ORDER BY Marca ASC")) {
    //printf("Select returned %d rows.\n", $result->num_rows);
    $rowDatitos = mysqli_fetch_assoc($result);
}

if ($combustible = $mysqli->query("SELECT * FROM Combustible ORDER BY Combustible ASC LIMIT 10")) {
    $rowCombustible = mysqli_fetch_assoc($combustible);
}

if ($anoMin = $mysqli->query("SELECT DISTINCT(Ano) AS MinAno FROM Vehiculo ORDER BY Ano ASC")) {
  $rowAnoMin = mysqli_fetch_assoc($anoMin);
}

if ($anoMax = $mysqli->query("SELECT DISTINCT(Ano) AS MaxAno FROM Vehiculo ORDER BY Ano DESC")) {
  $rowAnoMax = mysqli_fetch_assoc($anoMax);
}

?>
<!--row2-->
        <div class="row">
          <div class="publicidad">
            <img src="img/auto.jpg" alt="">
          </div>
          <div class="publicidad" >
            <img src="img/auto.jpg" alt="">
          </div> 
           <div class="publicidad">
            <img src="img/auto.jpg" alt="">
          </div>
          <div class="publicidad" >
            <img src="img/auto.jpg" alt="">
          </div>  
        </div>  <!--/row2-->

        <!--row3-->
        <div class="row">
  
            <div id="autolote">
              <img src="img/autolote.jpg" alt="">

            </div>
        </div><!--/row3-->
      </header>
      <div class="row"> <!--row4-->
        <aside id="buscar2">
              <form action="#" method="get">
                <div class="bus">BUSCAR</div>
                <br>
                <div class="texali">
                  Combustible:<br>
                  <select name="combustible">
                    <?php
                    do{ ?>
                    <option value=<?php printf('"%d"', $rowCombustible['IdCombustible']); ?>><?php printf('%s', $rowCombustible['Combustible']); ?></option>
                        <?php
                      }while($rowCombustible = mysqli_fetch_assoc($combustible));
                      ?>
                  </select>
                  
                  <br>Marca:<br>
                  <select name="cboMarca">
                    <?php
                    do{ ?>
                    <option value=<?php printf('"%d"', $rowDatitos['IdMarca']); ?>><?php printf('%s', $rowDatitos['Marca']); ?></option>
                        <?php
                      }while($rowDatitos = mysqli_fetch_assoc($result));
                      ?>
                  </select>
                    <br>Año<br>
                  <select class="span2">
                    <?php
                    do{ ?>
                    <option value=<?php printf('"%d"', $rowAnoMin['MinAno']); ?>><?php printf('%s', $rowAnoMin['MinAno']); ?></option>
                        <?php
                      }while($rowAnoMin = mysqli_fetch_assoc($anoMin));
                      ?>
                  </select>
                  <select class="span2">
                    <?php
                    do{ ?>
                    <option value=<?php printf('"%d"', $rowAnoMax['MaxAno']); ?>><?php printf('%s', $rowAnoMax['MaxAno']); ?></option>
                        <?php
                      }while($rowAnoMax = mysqli_fetch_assoc($anoMax));
                      ?>                  </select>
                  <br>Precio</br>
                  <select>
                    <option>Lps 30,000.00 - 50,000.00</option>
                    <option>Lps 50,000.00 - 100,000.00</option>
                  </select>
                  <br><br>
                  <button class="btn btn-large btn-block" type="submit">Buscar Carro</button>

                </div>
              </form>
        </aside>
        <section id="ultimos">
          <article>
              <div class="bus">
                ULTIMOS CARROS
              </div>
                <div class="auto">

                  <div class="carro">
                    <a href="detalle.php"><img src="img/carros/car1.gif" alt="carro 1"></a>
                  </div> 
                  <div class="cotizar">
                    Toyota<br>
                    Corolla 00<br>
                    Lps. 125,000.00
                  </div>
                </div>

                <div class="auto">
                  <div class="carro">
                    <a href="detalle.php"><img src="img/carros/car1.gif" alt="carro 1"></a>
                  </div> 
                  <div class="cotizar">
                    Toyota<br>
                    Corolla 00<br>
                    Lps. 125,000.00
                  </div>
                </div>
                <div class="auto">
                  <div class="carro">
                    <a href="detalle.php"><img src="img/carros/car1.gif" alt="carro 1"></a>
                  </div> 
                  <div class="cotizar">
                    Toyota<br>
                    Corolla 00<br>
                    Lps. 125,000.00
                  </div>
                </div>
                <div class="auto">
                  <div class="carro">
                    <a href="detalle.php"><img src="img/carros/car1.gif" alt="carro 1"></a>
                  </div> 
                  <div class="cotizar">
                    Toyota<br>
                    Corolla 00<br>
                    Lps. 125,000.00
                  </div>
                </div>
                <div class="auto">
                  <div class="carro">
                    <a href="detalle.php"><img src="img/carros/car1.gif" alt="carro 1"></a>
                  </div> 
                  <div class="cotizar">
                    Toyota<br>
                    Corolla 00<br>
                    Lps. 125,000.00
                  </div>
                </div>
                <div class="auto">
                  <div class="carro">
                    <a href="detalle.php"><img src="img/carros/car1.gif" alt="carro 1"></a>
                  </div> 
                  <div class="cotizar">
                    Toyota<br>
                    Corolla 00<br>
                    Lps. 125,000.00
                  </div>
                </div>
                <div class="auto">
                  <div class="carro">
                    <a href="detalle.php"><img src="img/carros/car1.gif" alt="carro 1"></a>
                  </div> 
                  <div class="cotizar">
                    Toyota<br>
                    Corolla 00<br>
                    Lps. 125,000.00
                  </div>
                </div>
                <div class="auto">
                  <div class="carro">
                    <a href="detalle.php"><img src="img/carros/car1.gif" alt="carro 1"></a>
                  </div> 
                  <div class="cotizar">
                    Toyota<br>
                    Corolla 00<br>
                    Lps. 125,000.00
                  </div>
                </div>
                <div class="auto">
                  <div class="carro">
                    <a href="detalle.php"><img src="img/carros/car1.gif" alt="carro 1"></a>
                  </div> 
                  <div class="cotizar">
                    Toyota<br>
                    Corolla 00<br>
                    Lps. 125,000.00
                  </div>
                </div>
                
          </article>
        </section>
      </div> <!--/row4-->
<?php
$result->close();
$mysqli->close();
?>