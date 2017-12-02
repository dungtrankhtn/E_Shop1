<li class="activate"><a href="{{ url('/') }}">Sản phẩm</a>
    <ul class="sub-menu list-unstyled">
        <div class="nag-mother-list">
            <div class="navg-drop-main">
                <div class="nav-drop">
                    <?php $menu_lv_1 = DB::table('product_type')->get();
                    ?>
                    @foreach ($menu_lv_1 as $item_lv_1)
                        <li>
                        <?php $menu_lv_2 = DB::table('product')->where('type',$item_lv_1->type_id)->first(); ?>
                        <li><a href="{!!url('product-type',[$menu_lv_2->type])!!}">{{ $item_lv_1->type_name }}</a></li>
                        </li>
                        @endforeach
                        </li>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
    </ul>
</li>