<?php

namespace Project\Db;

use Project\Db\Connection;

class QueryBuilder
{
    
    private $pdo;

    public function __construct()
    {
        $this->pdo = Connection::getConnection();
    }

    public function select($table, $parameters = [], $first = false, $condition = 'and',  $fetch = \PDO::FETCH_ASSOC)
    {

        $params = array_map(function($p){
            return "$p = :$p";
        }, array_keys($parameters));

        $where = !empty($parameters) ? 'where ' . implode(" {$condition} ", $params) : '';
 
        $s = $this->pdo->prepare("select * from {$table} {$where}");
        try{
            $s->execute($parameters);

            return $first ? $s->fetch($fetch) : $s->fetchAll($fetch);

        }  catch(\PDOException $e){
             die($e->getMessage());
        }
        
    }
    
    public function selectOrder($table, $order, $tipo)
    {
        $sql = "SELECT * FROM $table ORDER BY :v1 :v2";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':v1', $order);
        $stmt->bindParam(':v2', $tipo);

        try{
            
            $stmt->execute($stmt);
            return $s->fetchAll(\PDO::FETCH_ASSOC);

        }  catch(\PDOException $e){
            die($e->getMessage());
       }
       


        
    }

    public function insert($table, $data)
    {

        $columns = implode(',', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));

        $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";
        $stmt = $this->pdo->prepare($sql);

        try {
            return $stmt->execute($data);
        } catch (\PDOException $ex) {
            die($ex->getMessage());
        }
    }

    public function delete($table, $data)
    {   
        $where = key($data) . ' = :' . key($data);
        //die($where);
        $sql = "DELETE FROM {$table} WHERE {$where}";
        $stmt = $this->pdo->prepare($sql);

        try {
           return $stmt->execute($data);
        } catch (\PDOException $ex) {
            die($ex->getMessage());
        }
    }

    public function update($table, $data, $condition)
    {   
        $columns = implode(' =?, ', array_keys($data)) . ' =? ';
        $where = key($condition) . ' = ?';

        $sql = "UPDATE {$table} SET {$columns} WHERE {$where}";
        $stmt = $this->pdo->prepare($sql);

        $dados = array_values($data);
        $dados[] = $condition[key($condition)];
        
        try {
            return $stmt->execute($dados);
        } catch (\PDOException $ex) {
            die($ex->getMessage());
        }
    }

    public function selectwhere($table, $id)
{

  $sql = "select * from {$table} where id = :id"; 
  $s = $this->pdo->prepare($sql);

  $s->bindParam(':id', $id);

  try{
      $s->execute();

      return $s->fetch(\PDO::FETCH_ASSOC);

  }  catch(\PDOException $e){
       die($e->getMessage());
  }
}

    public function selectinner()
{

  $sql = "SELECT sum(gols) as gols, times.nome as time, times.id as id FROM tabela
    inner join times
    on times.id = tabela.times_id
    group by tabela.times_id order by gols desc"; 

  $s = $this->pdo->prepare($sql);
  try{
      $s->execute();

      return $s->fetchAll(\PDO::FETCH_ASSOC);

  }  catch(\PDOException $e){
       die($e->getMessage());
  }
}

    public function selectinner2($id)
{

  $sql = "SELECT distinct(j.estadio), j.data, t1.nome as time1, t2.nome as time2, ta1.gols as g1, ta2.gols as g2 FROM jogos as j
    inner join times as t1
    on j.time1 = t1.id
    inner join times as t2
    on j.time2 = t2.id
    inner join tabela as ta1
    on t1.id = ta1.times_id
    inner join tabela as ta2
    on t2.id = ta2.times_id
    where j.time1 = :id or j.time2 = :id"; 
  $s = $this->pdo->prepare($sql);

  $s->bindParam(':id', $id);

  try{
      $s->execute();

      return $s->fetchAll(\PDO::FETCH_ASSOC);

  }  catch(\PDOException $e){
       die($e->getMessage());
  }
}


}
