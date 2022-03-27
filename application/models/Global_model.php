<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Global_model extends CI_Model {
function __construct()
        
    {
        parent::__construct();

    }


     // get all
    function get_sspd_notif($tipe='',$jabatan='')
    {
        
        
            if ($tipe =='PM') {
            $this->db->where('sspd.status', $jabatan);
            }
            if ($tipe =='PP') {
            $this->db->where('sspd.status like "PP%" or sspd.status like "MP%" or sspd.status like "LN001%"   ');
            }
            $this->db->select('count(id) as jml');
        	return $this->db->get('sspd')->row();
    }
       // get data by id
    function get_user($id)
    {
        $this->db->where('user.id', $id);
        $user = $this->db->get('user')->row();
        if (!empty($user) && $user->jenis == 'PM') {
            $pm = $this->db->query('select * from pemda where id_user ='.$user->id)->row();
            foreach ($pm as $key => $value) {
                
                $user->$key = $value;
            }
        
        }else if (!empty($user) && $user->jenis == 'PP') {
            $pm = $this->db->query('select * from ppat where id_user ='.$user->id)->row();
            foreach ($pm as $key => $value) {
                
                $user->$key = $value;
            }
        }
        
        return $user;
    }

    public function get_menu($value='')
    {
        $arr= $this->db->query('select * from menu ')->result();
        
        $tree = $this->buildTree($arr);
        $tree = $this->renderMenu($tree);
        $tree = substr($tree, 4);
        $tree = substr($tree, 0,-5);
        return $tree;
    }

    public function buildTree(array $elements, $parentId = 0) 
    {
        $branch = array();
        foreach ($elements as $element) 
        {
            if ($element->parent == $parentId) 
            {
                $children = $this->buildTree($elements, $element->id_menu);
                if ($children)  $element->children = $children;
                $branch[] = $element;
            }
        }
        return $branch;
    }

    public function renderMenu($items) {
        $render = '<ul>';

        foreach ($items as $item) {
            if (!empty($item->children)) {
                    
                $render .= '<li><a href="page-social.html" class="has-arrow"><i class="fa fa-share-alt-square"></i><span>' . $item->menu.'</span>';
                $render .= $this->renderMenu($item->children);
            }else{
            if (!empty($item->menu)) {

            $render .= '<li><a href="page-social.html"><i class="fa fa-share-alt-square"></i><span>' . $item->menu.'</span>';

            }
            }
            $render .= '</li>';
        }

        return $render . '</ul>';
    }
    
	

}

/* End of file Global_model.php */
/* Location: ./application/models/Global_model.php */