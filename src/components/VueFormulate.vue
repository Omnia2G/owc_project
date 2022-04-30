<template>
  <FormKit
    type="form"
    v-model="formValues"
    @submit="saveFormkitForm"
    :actions="false"
    incomplete-message="Formular nie je korektne vyplneny!"
  >
    <base-card>
      <p>
        Tu sa dá vytvoriť test s 10 otázkami a odpoveďami typu A,B,C - pre
        jednotlivé témy.
      </p>
      <p>1.Krok: zadajte titul testu</p>
      <p>2.Krok: vyberte tému</p>
      <p>3.Krok: vyplňte formulár, a všade označte správnu odpoveď!</p>
      <p>4.Krok: odoslať formulár</p>
      <FormKit
        type="text"
        name="title"
        label="Titul"
        help="Titul pre novy test"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste titul!',
        }"
      />
      <FormKit
        type="select"
        name="courses"
        label="Temy"
        help="Vyberte temu testu!"
        :options="{
          vlc: 'VLC',
          occ: 'OCC',
          irc: 'IRC',
          fso: 'FSO',
          uvc: 'UVC',
          lifi: 'LI-FI',
        }"
      />
    </base-card>
    <!-- Otazka -->
    <base-card>
      <FormKit
        type="textarea"
        name="q1"
        label="Otazka 1"
        help="Zadajte text otazky"
        validation="required|length:0,200"
        :validation-messages="{ length: 'Max dlzka otazky je 200 znakov!', required: 'Nezadali ste text k otazke!' }"
      />
      <FormKit
        type="text"
        name="q1a1"
        label="Odpoved A"
        help="Zadajte odpoved - A"
        validation="required"
        :validation-messages="{
    required: 'Nezadali ste text pre odpoved!'
  }"
      />
      <FormKit
        type="text"
        name="q1a2"
        label="Odpoved B"
        help="Zadajte odpoved - B"
        validation="required"
        :validation-messages="{
    required: 'Nezadali ste text pre odpoved!'
  }"
      />
      <FormKit
        type="text"
        name="q1a3"
        label="Odpoved C"
        help="Zadajte odpoved - C"
        validation="required"
        :validation-messages="{
    required: 'Nezadali ste text pre odpoved!'
  }"
      />
      <FormKit
        type="radio"
        name="q1_good_ans"
        label="Spravna odpoved"
        help="Oznacte spravnu odpoved ku 1. otazke"
        :options="{
          q1a1: 'A',
          q1a2: 'B',
          q1a3: 'C',
        }"
         validation="required"
        :validation-messages="{
    required: 'Neoznacili ste spravnu odpoved!'
  }"
      />
    </base-card>
    <base-button>Vytvorit test</base-button>
  </FormKit>
</template>

<script>
import BaseCard from "./ui/BaseCard.vue";

export default {
  components: {
    BaseCard
  },
  //emits:["save-test"],
  data() {
    return {
      formValues: {},
    };
  },
  methods: {
    saveFormkitForm() {
      let data = new FormData();
      for (const [key, value] of Object.entries(this.formValues)) {
        console.log(key, ": ", value);
        data.append(key, value);
      }
      //data.append('action','new_test'); 
      console.log('form data: ', this.formData.get('title'));
       //this.$emit("save-test", data);
    },
  },
};
</script>

<style scoped>
/* [data-invalid] .formkit-inner {
  border-color: red;
  box-shadow: 0 0 0 1px red;
}

[data-complete] .formkit-inner {
  border-color: red;
  box-shadow: 0 0 0 1px green;
}
[data-complete] .formkit-inner::after {
  content: "✅";
  display: block;
  padding: 0.5em;
} */

</style>
