
<!--for文 + if文のデバッグ 課題①-->
<?php
class NumberChecker {
  public static function printMultiplesOfThree() {
    for ($i = 1; $i <= 6; $i++) {
      if ($i % 3 == 0) {
          echo $i . "\n";
      }
    }
  }
}

NumberChecker::printMultiplesOfThree();

?>


<!--for文 + if文のデバッグ 課題②-->
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
            echo $i . "\n";
        }
}
?>

<?php 
  class NumberPrinter {
    public static function printEvenNumbers() {
      for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i . "\n";
        }
      }
    }
  }
  NumberPrinter::printEvenNumbers();

  ?>



  <!--for文 + if文のデバッグ 課題③-->
  <?php 
  class NumberFinder {
    public static function printMultiplesDescription() {
      for ($i = 1; $i <= 9; $i++) {
        if ($i % 2 == 0 && $i % 3 == 0) {
            echo $i . "は2の倍数かつ3の倍数です" . "\n";
        } elseif ($i % 2 == 0) {
                    echo $i . "は2の倍数です" . "\n";
            } elseif ($i % 3 == 0) {
                    echo $i . "は3の倍数です" . "\n";
            }
        }
      }
  }
  NumberFinder::printMultiplesDescription();
  ?>