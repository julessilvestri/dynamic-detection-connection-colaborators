<?php

require_once 'config.php';

class DbPdo
{
    /**
     *
     * Get database connection with config data
     *
     * @return PDO
     *
     */
    public function getPdo()
    {
        try {
            $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PWD);
        } catch (PDOException $e) {
            throw new Exception("Erreur de connexion à la base de données", 1);
        }

        return $pdo;
    }
}
