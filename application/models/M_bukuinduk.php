<?php

class M_bukuinduk extends CI_Model
{

    function get_all($kelas=NULL)
    {
        if($kelas==NULL)
        {
            $query = $this->db->query("SELECT * FROM datasiswa d, datatempattinggal dt, datapendidikan dp, datakesehatan dk, dataayah da, dataibu di, datawali dw, datahobi dh, dataperkembangansiswa dpr WHERE dt.datasiswa_id=d.id AND dp.datasiswa_id=d.id AND dk.datasiswa_id=d.id AND da.datasiswa_id=d.id AND di.datasiswa_id=d.id AND dw.datasiswa_id=d.id AND dh.datasiswa_id=d.id AND dpr.datasiswa_id=d.id");
        } else {
            $query = $this->db->query("SELECT * FROM datasiswa d, datatempattinggal dt, datapendidikan dp, datakesehatan dk, dataayah da, dataibu di, datawali dw, datahobi dh, dataperkembangansiswa dpr WHERE dt.datasiswa_id=d.id AND dp.datasiswa_id=d.id AND dk.datasiswa_id=d.id AND da.datasiswa_id=d.id AND di.datasiswa_id=d.id AND dw.datasiswa_id=d.id AND dh.datasiswa_id=d.id AND dpr.datasiswa_id=d.id AND dp.kompkeahlian='$kelas'");
        }
        return $query->result();
    }

    function get_by_id($idsiswa)
    {
        $query = $this->db->query("SELECT * FROM datasiswa d, datatempattinggal dt, datapendidikan dp, datakesehatan dk, dataayah da, dataibu di, datawali dw, datahobi dh, dataperkembangansiswa dpr
WHERE dt.datasiswa_id=d.id AND dp.datasiswa_id=d.id AND dk.datasiswa_id=d.id AND da.datasiswa_id=d.id AND di.datasiswa_id=d.id AND dw.datasiswa_id=d.id AND dh.datasiswa_id=d.id AND dpr.datasiswa_id=d.id AND d.id='$idsiswa'");
        return $query->row();
    }

    function get_kelas()
    {
        $query = $this->db->query("SELECT DISTINCT kompkeahlian FROM datapendidikan");
        return $query->result();
    }

    function add($data)
    {
        $this->db->insert('informasi', $data);
        return TRUE;
    }

    function edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('informasi', $data);
        return TRUE;
    }

    function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("informasi");
        return true;
    }
}