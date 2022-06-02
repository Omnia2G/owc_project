<template>
  <section>
    <base-card>
      <h2>{{h2_sk}}</h2>
      <p>
        {{p_sk}}
        <router-link to="/">{{home_sk}}</router-link>.
      </p>
    </base-card>
  </section>
</template>

<script>
export default {
  data(){
    return{
      h2_en: 'Page not found!',
      p_en: 'This page could not be found - maybe check out the',
      home_en: 'Home page',
      h2_sk: 'Stránka Neexistuje!',
      p_sk: 'Hladaná stránka neexistuje v aplikácií - skúste: ',
      home_sk: 'Domov',
    };
  }
}
</script>