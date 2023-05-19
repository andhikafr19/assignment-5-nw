<?php 
  $data = <<<'EOD'
  X, -9\\\10\100\-5\\\0\\\\, A
  Y, \\13\\1\, B
  Z, \\\5\\\-3\\2\\\800, C
  EOD;

  $dataRow = explode("\n", $data);
  print_r($dataRow);
?>