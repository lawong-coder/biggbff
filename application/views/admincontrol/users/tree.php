<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card m-b-30">
			<div class="card-body">
                <!-- <div style="overflow-x: scroll; overflow-y:hidden;" class="dummyscroll"><div>&nbsp;</div></div> -->
                <div class="table-responsive orig-scroll tree_block">
                  <?php 
                    function buildTree($data, $counter = 0){
                       foreach ($data as $key => $value) {
                            $html .= '<li> <span class="reftree_user_block' . (($counter == 0) ? ' root_member' : '') . '">'. $value['avtar'] . "<h4>" . $value['name'] . "</h4><p>" . $value['desc'] .'</p></span>';

                            $counter++;
                            
                            $t = buildTree($value['children'], $counter);

                            if($t) $html .= "<ul>{$t}</ul>";
                            $html .= '</li>';
                       }
                       return $html;
                    }
                    echo "<figure class='top-scroll'>";
                    echo "<ul class='usertree'>". buildTree($userslist) ."</ul>";
                    echo "</figure>";
                  ?>
                </div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
  $(".dummyscroll > div").width($(".top-scroll")[0].scrollWidth)

  $(".dummyscroll").on('scroll',function(){
    $(".orig-scroll").scrollLeft($(".dummyscroll").scrollLeft());
  });
  $(".orig-scroll").on('scroll',function(){
    $(".dummyscroll").scrollLeft($(".orig-scroll").scrollLeft());
  });
</script>