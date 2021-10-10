<h3>Lista de produtos</h3>
<hr>


	<section id="paginacao" class="row">
		<center>
			PAGINAS
		</center>
	</section>

		<!-- começa a lista de produtos ---->

        {foreach from=$PRO item=P}

			<section id="produtos" class="row" class="py-5">
		<ul style="List-style: nome" >

						<div class="row" id="pularliha">

						 <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="media/images/{$P.pro_img}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{$P.pro_nome}</h5>
                                    <!-- Product price-->
                                    {$P.pro_valor}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">View options</a></div>
                            </div>
                        </div>
                    </div>


					

					</div>

		</ul>

			</section>
            {/foreach}

	<!-- paginação inferior -->
	<section id="pagincao" class="row"
	<center>
	PAGINAS
	</center>
	</section>
