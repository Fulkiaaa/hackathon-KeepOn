<?php 
    namespace App\utils;


    class Database
    {
        static private ?\PDO $pdo = null;


        public function __construct(
            String $host = '',
            String $name = '',
            String $user = '',
            String $pass = '',
        ) {
            if (self::$pdo === null)
            {
                try {self::$pdo = new \PDO("mysql:host=$host;dbname=$name", $user, $pass);}
                catch (\Throwable $th) {die($th->getMessage());}
            }
        }

        static public function select(
            String $table,
            String $columns    = '*',
            Array  $joinOn     = [],
            String $whereQuery = '',
            String $orderBy    = '',
            String $groupBy    = '',
            Array  $limit      = null,
        ) {
            $where = $whereQuery != '' ? 'WHERE '.$whereQuery : '';
            $join = '';
            foreach ($joinOn as $tableKey => $conditionVal) {$join .= 'INNER JOIN '.$tableKey.' ON '.$conditionVal.' ';}
            $order = $orderBy != '' ? 'ORDER BY '.$orderBy : '';
            $group = $groupBy != '' ? 'GROUP BY '.$groupBy : '';
            $limit = $limit != null ? 'LIMIT '.$limit[0].', '.$limit[1] : '';
            $query = self::$pdo->query("SELECT $columns FROM $table $join $where $order $group $limit;");
            return $query->fetchAll(\PDO::FETCH_ASSOC);
        }

        static public function insert(
            String $table,
            Array  $values,
        ) {
            $columnsQuery = [];
            $valuesQuery = [];
            $execute = [];
            foreach ($values as $column => $value)
            {
                $columnsQuery[] = $column;
                $valuesQuery[] = ":$column";
                $execute[$column] = $value;
            }
            $columnsQuery = implode(', ', $columnsQuery);
            $valuesQuery = implode(', ', $valuesQuery);
            print_r("INSERT INTO $table ($columnsQuery) VALUES ($valuesQuery);<br>");
            print_r($execute);
            echo "<br><br><br>";
            return self::$pdo->prepare("INSERT INTO $table ($columnsQuery) VALUES ($valuesQuery);")->execute($execute);
        }

        static public function update(
            String $table,
            Array  $set,
            String $where = '',
        ) {
            $setQuery = [];
            $execute = [];
            foreach ($set as $column => $value)
            {
                $setQuery[] = "$column = :$column";
                $execute[$column] = $value;
            }
            $setQuery = implode(', ', $setQuery);
            $where = $where === '' ? '' : 'WHERE '.$where;
            return self::$pdo->prepare("UPDATE $table SET $setQuery $where;")->execute($execute);
        }

        static public function deleteById(
            int    $id,
            String $table,
            String $columnId,
        ) {
            $query = self::$pdo->prepare("DELETE FROM $table WHERE $columnId = :id;");
            return $query->execute(['id' => $id]);
        }
    }
?>