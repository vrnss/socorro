<?php
/**
 * Management of data in the priorityjobs table.
 */
class Priorityjobs_Model extends Model {

    /**
     * Add a new priority job by UUID
     *
     * @param  string The UUID of the report in question
     * @return mixed  Result of the DB insert
     */
    public function add($uuid) {
        return $this->db->query('INSERT INTO priorityjobs ( uuid ) VALUES (?)', $uuid); 
    }

}
