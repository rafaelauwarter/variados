<?php
//Banco

const URL = 'localhost';
const USERBD = 'root';
const SENHABD = '';
const NOMEBD = 'basedb';

$conn = mysqli_connect(URL, USERBD, SENHABD, NOMEBD);

if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}