<template>
  <div class="card">
    <slot></slot>
  </div>
</template>

<style scoped>
.card {
  text-align: center;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
  padding: 1rem;
  margin: 2rem auto;
  max-width: 40rem;
  background-color: white;
}

.card-dark{
   text-align: center;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
  padding: 1rem;
  margin: 2rem auto;
  max-width: 40rem;
  background-color: #000000;
}
.card1{
   text-align: center;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
  padding: 1rem;
  margin: 2rem auto;
  max-width: 40rem;
  background-color: #333;
}

  @media (max-width: 700px) {
    .card, .card1, .card-dark{
      max-width: 360px;
    }
  }
  @media (max-width: 300px) {
    .card, .card1, .card-dark{
      max-width: 260px;
    }
  }
</style>