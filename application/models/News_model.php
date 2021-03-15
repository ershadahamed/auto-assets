<?php
class News_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE) {
            return $this->db->get('news')->result_array();
        }
        return $this->db->get_where('news', array('slug' => $slug))->row_array();
    }
}
