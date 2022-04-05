<?php

$template_array = [
    "table_open" => "<table border='1' cellpadding='4' cellspacing='0'>",
    "table_close" => "</table>"
];

$this->table->set_template($template_array);
$this->table->set_heading(["No", "Nama", "Alamat"]);

$this->table->add_row(["1", "Zaidan", "Rumbai"]);
$this->table->add_row(["2", "Alex", "Pekanbaru"]);
$this->table->add_row(["3", "Pajitnov", "Jakarta"]);

echo $this->table->generate();
