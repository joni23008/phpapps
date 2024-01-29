<?php
include("header.html");
?>

<?php
/* Tee sellainen PHP -ohjelma, joka tulostaa kymmenen kertotaulun taulukkoon seuraavasti

*	1	2	3	4	5	6	7	8	9	10
1	1	2	3	4	5	6	7	8	9	10
2	2	4	6	8	10	12	14	16	18	20
3	3	6	9	12	15	18	21	24	27	30
4	4	8	12	16	20	24	28	32	36	40
5	5	10	15	20	25	30	35	40	45	50
6	6	12	18	24	30	36	42	48	54	60
7	7	14	21	28	35	42	49	56	63	70
8	8	16	24	32	40	48	56	64	72	80
9	9	18	27	36	45	54	63	72	81	90
10	10	20	30	40	50	60	70	80	90	100

Käytä taulukon tulostukseen jotain toistolausetta (for, while, do-while).*/

$luvut[0]=1;
$luvut[1]=2;
$luvut[2]=3;
$luvut[3]=4;
$luvut[4]=5;
$luvut[5]=6;
$luvut[6]=7;
$luvut[7]=8;
$luvut[8]=9;
$luvut[9]=10;

/*

for ($i=0;$i<count($luvut);$i++){
    print $luvut[$i];
}

    print $luvut[$i];
    print $luvut[$i] * 2;
    print $luvut[$i] * 3;
    print $luvut[$i] * 4;
    print $luvut[$i] * 5;
    print $luvut[$i] * 6;
    print $luvut[$i] * 7;
    print $luvut[$i] * 8;
    print $luvut[$i] * 9;
    print $luvut[$i] * 10;*/

          
   
    
?>

<table>

  <tr>
    <?php
  for ($i=1;$i<=10;$i++){
    print "<th style='width:50px; text-align:left'>". $i ."</th>";
}
    ?>
  </tr>

  <tr>
    <?php
  for ($i=1;$i<=10;$i++){
    print "<th style='width:50px; text-align:left'>". $i ."</th>";
}
    ?>
  </tr>

  <tr>
  <?php
  for ($i=1;$i<=10;$i++){
    print "<th style='width:50px; text-align:left'>". $i * 2 ."</th>";
}
    ?>
  </tr>

  <tr>
  <?php
  for ($i=1;$i<=10;$i++){
    print "<th style='width:50px; text-align:left'>". $i * 3 ."</th>";
}
    ?>
  </tr>

  <tr>
  <?php
  for ($i=1;$i<=10;$i++){
    print "<th style='width:50px; text-align:left'>". $i * 4 ."</th>";
}
    ?>
  </tr>

  <tr>
  <?php
  for ($i=1;$i<=10;$i++){
    print "<th style='width:50px; text-align:left'>". $i * 5 ."</th>";
}
    ?>
  </tr>

  <tr>
  <?php
  for ($i=1;$i<=10;$i++){
    print "<th style='width:50px; text-align:left'>". $i * 6 ."</th>";
}
    ?>
  </tr>

  <tr>
  <?php
  for ($i=1;$i<=10;$i++){
    print "<th style='width:50px; text-align:left'>". $i * 7 ."</th>";
}
    ?>
  </tr>

  <tr>
  <?php
  for ($i=1;$i<=10;$i++){
    print "<th style='width:50px; text-align:left'>". $i * 8 ."</th>";
}
    ?>
  </tr>

  <tr>
  <?php
  for ($i=1;$i<=10;$i++){
    print "<th style='width:50px; text-align:left'>". $i * 9 ."</th>";
}
    ?>
  </tr>

  <tr>
  <?php
  for ($i=1;$i<=10;$i++){
    print "<th style='width:50px; text-align:left'>". $i * 10 ."</th>";
}
    ?>
  </tr>



</table>

<?php
include("footer.html");
?>
