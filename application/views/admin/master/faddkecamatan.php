

<!--              
        HEAD
--> 

<?php $this->load->view('admin/view/flogin'); ?>

<!--            
        SIDEBAR
--> 
<div id="sidebar">
    <ul>
        <li class="nosubmenu">
            <a href="<?php echo base_url(); ?>index.php/adm/dashbor">
                <img src="<?php echo base_url(); ?>img/icons/menu/black-dashboard.png" alt="" />
                Dashboard
            </a>
        </li>
        <li class="current"><a href="#"><img src="<?php echo base_url(); ?>img/icons/menu/black-layout.png" alt="" /> Master</a>
            <ul>
               
                <li><a href="<?php echo base_url(); ?>index.php/mas/addkategori">Kategori</a></li>
                <li class="current"><a href="<?php echo base_url(); ?>index.php/mas/addkecamatan">Kecamatan</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/mas/addwisata">Wisata</a></li>
                 <li><a href="<?php echo base_url(); ?>index.php/mas/adduser">User</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/adm/setadmin">Setting Admin</a></li>
            </ul>
        </li>
        <li><a href="#"><img src="<?php echo base_url(); ?>img/icons/menu/black-layout.png" alt="" /> Posting</a>
            <ul>
                <li><a href="<?php echo base_url(); ?>index.php/adm/kategori">Kategori</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/adm/kecamatan">Kecamatan</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/adm/wisata">Wisata</a></li>
               
                <li><a href="<?php echo base_url(); ?>index.php/adm/user">User</a></li>

            </ul>
        </li>
    </ul>
</div>

<!--            
      CONTENT 
--> 


<div id="content">


    <h1><img src="<?php echo base_url(); ?>img/icons/posts.png" alt="" />Add Kecamatan</h1>
    
    <form action="<?php echo base_url(); ?>index.php/mas/addkecamatan/insert" method="POST" name="agendafrom" id="agendaform">
        <div class="bloc">
            <div class="title">Menambah Kecamatan</div>
            <div class="content">
                <div class="input">
                    <label for="input1">Nama Kecamatan</label>
                    <input type="text" id="namaKecamatan" name="nama" />

                </div>

                
                <br/><br/>
                <div class="submit">
                    <input type="submit" value="Submit" onclick="saveForm();return false;"/>

                </div>
            </div>
        </div>
    </form>


</div>