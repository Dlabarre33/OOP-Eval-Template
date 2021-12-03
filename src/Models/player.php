<?php

declare(strict_types=1);

namespace App\Models;

use App\DB;

class Player
{
    protected int $id;
    protected string $email;
    protected string $nickname;


    //*  ===GETTERS & SETTERS =================================
    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of nickname
     */
    public function getNickname(): string
    {
        return $this->nickname;
    }

    /**
     * Set the value of nickname
     *
     * @return  self
     */
    public function setNickname($nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }
    //!  === METHODS DE RECUP DES DONNEES DE LA TABLE PLAYER =============================
    public function getPlayer(): array
    {
        try {
            $db = (new DB())->getStaticPdo();

            $sql = $db->query('SELECT * FROM player');

            $result = $sql->fetchAll(\PDO::FETCH_CLASS, '\App\Models\player');

            return $result ?? [];
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }
    }

    public function createPlayer(int $id, string $email, int $nickname)
    {
        try {
            $db = (new DB())->getStaticPdo();

            $sql = 'INSERT INTO cars (id,email,nickname) VALUES (:id,:email,:nickname)';
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id, \PDO::PARAM_INT);
            $req->bindValue(':email', $email, \PDO::PARAM_STR);
            $req->bindValue(':nickname', $nickname, \PDO::PARAM_STR);

            return $req->execute();
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }
    }
}
