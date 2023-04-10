<?php


$jefford = new Sudha\\Phpoop\Person('joe hoe');

$staff = new Sudha\\Phpoop\Staff([$jefford]);

$lar = new Sudha\\Phpoop\Business( $staff );

$lar->hire($jefford);

$lar->hire(new Person('hoe doe'));

var_dump($staff);