<?php

declare(strict_types=1);

namespace App\Models;

use App\DB;

class Contest
{
    protected int $id;
    protected int $game_id;
    public string $start_date;
    protected int $winner_id;



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
     * Get the value of game_id
     */
    public function getGame_id(): int
    {
        return $this->game_id;
    }

    /**
     * Set the value of game_id
     *
     * @return  self
     */
    public function setGame_id($game_id): self
    {
        $this->game_id = $game_id;

        return $this;
    }

    /**
     * Get the value of start_date
     */
    public function getStart_date(): string
    {
        return $this->start_date;
    }

    /**
     * Set the value of start_date
     *
     * @return  self
     */
    public function setStart_date($start_date): self
    {
        $this->start_date = $start_date;

        return $this;
    }

    /**
     * Get the value of winner_id
     */
    public function getWinner_id(): int
    {
        return $this->winner_id;
    }

    /**
     * Set the value of winner_id
     *
     * @return  self
     */
    public function setWinner_id($winner_id): self
    {
        $this->winner_id = $winner_id;

        return $this;
    }

    //!  === METHODS DE RECUP DES DONNEES DE LA TABLE PLAYER =============================
    public function getPlayer(): array
    {
        try {
            $db = (new DB())->getStaticPdo();

            $sql = $db->query('SELECT * FROM contest');

            $result = $sql->fetchAll(\PDO::FETCH_CLASS, '\App\Models\contest');

            return $result ?? [];
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }
    }

    public function createContest(int $id, int $game_id, string $start_date, int $winner_id)
    {
        try {
            $db = (new DB())->getStaticPdo();

            $sql = 'INSERT INTO cars (id,game_id,start_date,winner_id) VALUES (:id,:game_id,:start_date,:winner_id)';
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id, \PDO::PARAM_INT);
            $req->bindValue(':game_id', $game_id, \PDO::PARAM_INT);
            $req->bindValue(':start_date', $start_date, \PDO::PARAM_STR);
            $req->bindValue(':winner_id', $winner_id, \PDO::PARAM_INT);

            return $req->execute();
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }
    }
}
