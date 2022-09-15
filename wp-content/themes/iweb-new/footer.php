<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iweb-moscow
 */

?>

	</div><!-- #content -->

	<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>© <?php echo date("Y"); echo " "; bloginfo("name"); echo " | Все права защищены.";  ?></p>
                    
                    <p>Любая информация, представленная на данном сайте, носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями статьи 437 ГК РФ.</p>
                </div>
            </div>
        </div>  
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

    <div class="modal fade" id="modalcallback">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Пожалуйста, заполните форму<br> и мы Вам перезвоним.</h4>
          </div>
          <div class="modal-body">
            <form id="form_one">
                
                <input type="hidden" name="project_name" value="Название сайта">
                <input type="hidden" name="admin_email" value="Email">
                <input type="hidden" name="form_subject" value="Заявка на обратный звонок">
                
            <input class="form-control" type="text" name="name" placeholder="Ваше имя" required /><br>
            <input class="form-control" type="text" name="phone" placeholder="Ваш телефон*" required /><br>
            <button class="btn btn-success">Перезвоните мне</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="modalcallback">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Пожалуйста, заполните форму<br> и мы Вам перезвоним.</h4>
          </div>
          <div class="modal-body">
            <form id="form_one">
                
                <input type="hidden" name="project_name" value="Название сайта">
                <input type="hidden" name="admin_email" value="Email">
                <input type="hidden" name="form_subject" value="Заявка на обратный звонок">
                
            <input class="form-control" type="text" name="name" placeholder="Ваше имя" required /><br>
            <input class="form-control" type="text" name="phone" placeholder="Ваш телефон*" required /><br>
            <button class="btn btn-success">Перезвоните мне</button>
            </form>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
