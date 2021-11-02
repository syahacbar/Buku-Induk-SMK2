<?php

class M_bukuinduk extends CI_Model
{

    function get_all($kelas=NULL)
    {
        if($kelas==NULL)
        {
            $query = $this->db->query("SELECT * FROM datasiswa d
                        LEFT JOIN datatempattinggal dt ON dt.datasiswa_id=d.id
                        LEFT JOIN datapendidikan dp ON dp.datasiswa_id=d.id
                        LEFT JOIN datakesehatan dk ON dk.datasiswa_id=d.id
                        LEFT JOIN dataayah da ON da.datasiswa_id=d.id
                        LEFT JOIN dataibu di ON di.datasiswa_id=d.id
                        LEFT JOIN datawali dw ON dw.datasiswa_id=d.id
                        LEFT JOIN datahobi dh ON dh.datasiswa_id=d.id
                        LEFT JOIN dataperkembangansiswa dpr ON dpr.datasiswa_id=d.id");
        } else {
            $query = $this->db->query("SELECT * FROM datasiswa d
                        LEFT JOIN datatempattinggal dt ON dt.datasiswa_id=d.id
                        LEFT JOIN datapendidikan dp ON dp.datasiswa_id=d.id
                        LEFT JOIN datakesehatan dk ON dk.datasiswa_id=d.id
                        LEFT JOIN dataayah da ON da.datasiswa_id=d.id
                        LEFT JOIN dataibu di ON di.datasiswa_id=d.id
                        LEFT JOIN datawali dw ON dw.datasiswa_id=d.id
                        LEFT JOIN datahobi dh ON dh.datasiswa_id=d.id
                        LEFT JOIN dataperkembangansiswa dpr ON dpr.datasiswa_id=d.id 
                        WHERE dp.kompkeahlian='$kelas'");
        }
        return $query->result();
    }

    function get_by_id($idsiswa)
    {
        $query = $this->db->query("SELECT * FROM datasiswa d
                        LEFT JOIN datatempattinggal dt ON dt.datasiswa_id=d.id
                        LEFT JOIN datapendidikan dp ON dp.datasiswa_id=d.id
                        LEFT JOIN datakesehatan dk ON dk.datasiswa_id=d.id
                        LEFT JOIN dataayah da ON da.datasiswa_id=d.id
                        LEFT JOIN dataibu di ON di.datasiswa_id=d.id
                        LEFT JOIN datawali dw ON dw.datasiswa_id=d.id
                        LEFT JOIN datahobi dh ON dh.datasiswa_id=d.id
                        LEFT JOIN dataperkembangansiswa dpr ON dpr.datasiswa_id=d.id 
                        WHERE d.id='$idsiswa'");
        return $query->row();
    }

    function get_kelas()
    {
        $query = $this->db->query("SELECT DISTINCT kompkeahlian FROM datapendidikan");
        return $query->result();
    }

    function add($data,$table)
    {
        $this->db->insert($table, $data);
        return TRUE;
    }

    function edit($data, $table, $id)
    {
        $this->db->where('id', $id);
        $this->db->update($table, $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("datasiswa");
        return true;
    }
}