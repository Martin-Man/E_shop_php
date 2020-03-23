
<h1 class="page-header">
   Všetky produkty

</h1>

<h3 class="bg-success"><?php display_message(); ?></h3>
<table class="table table-hover">

    <thead>

      <tr>
           <th>Id</th>
           <th>Nadpis</th>
           <th>Kategória</th>
           <th>Cena</th>
           <th>Na sklade</th>
      </tr>
    </thead>
    <tbody>
    
      <?php get_products_in_admin(); ?>

  </tbody>
</table>



