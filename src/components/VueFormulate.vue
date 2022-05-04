<template>
  <FormKit
    type="form"
    v-model="formValues"
    @submit="saveFormkitForm"
    :actions="false"
    incomplete-message="Formulár nie je korektne vyplnený!"
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
        help="Titul pre nový test"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste titul!',
        }"
      />
      <FormKit
        type="select"
        name="course"
        label="Téma"
        help="Vyberte tému testu!"
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
        label="Otázka 1"
        help="Zadajte text otázky"
        validation="required|length:0,200"
        :validation-messages="{
          length: 'Max dĺžka otázky je 200 znakov!',
          required: 'Nezadali ste text k otázke!',
        }"
      />
      <FormKit
        type="text"
        name="q1a1"
        label="Odpoveď A"
        help="Zadajte odpoveď - A"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q1a2"
        label="Odpoveď B"
        help="Zadajte odpoveď - B"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q1a3"
        label="Odpoveď C"
        help="Zadajte odpoveď - C"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="radio"
        name="q1_good_ans"
        label="Správna odpoveď"
        help="Označte správnu odpoveď k 1. otázke"
        :options="{
          q1a1: 'A',
          q1a2: 'B',
          q1a3: 'C',
        }"
        validation="required"
        :validation-messages="{
          required: 'Neoznačili ste správnu odpoveď!',
        }"
      />
    </base-card>
    <!-- Otazka -->
    <base-card>
      <FormKit
        type="textarea"
        name="q2"
        label="Otázka 2"
        help="Zadajte text otázky"
        validation="required|length:0,200"
        :validation-messages="{
          length: 'Max dĺžka otázky je 200 znakov!',
          required: 'Nezadali ste text k otázke!',
        }"
      />
      <FormKit
        type="text"
        name="q2a1"
        label="Odpoveď A"
        help="Zadajte odpoveď - A"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q2a2"
        label="Odpoveď B"
        help="Zadajte odpoveď - B"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q2a3"
        label="Odpoveď C"
        help="Zadajte odpoveď - C"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="radio"
        name="q2_good_ans"
        label="Správna odpoveď"
        help="Označte správnu odpoveď k 2. otázke"
        :options="{
          q2a1: 'A',
          q2a2: 'B',
          q2a3: 'C',
        }"
        validation="required"
        :validation-messages="{
          required: 'Neoznačili ste správnu odpoveď!',
        }"
      />
    </base-card>
    <!-- Otazka -->
    <base-card>
      <FormKit
        type="textarea"
        name="q3"
        label="Otázka 3"
        help="Zadajte text otázky"
        validation="required|length:0,200"
        :validation-messages="{
          length: 'Max dĺžka otázky je 200 znakov!',
          required: 'Nezadali ste text k otázke!',
        }"
      />
      <FormKit
        type="text"
        name="q3a1"
        label="Odpoveď A"
        help="Zadajte odpoveď - A"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q3a2"
        label="Odpoveď B"
        help="Zadajte odpoveď - B"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q3a3"
        label="Odpoveď C"
        help="Zadajte odpoveď - C"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="radio"
        name="q3_good_ans"
        label="Správna odpoveď"
        help="Označte správnu odpoveď k 3. otázke"
        :options="{
          q3a1: 'A',
          q3a2: 'B',
          q3a3: 'C',
        }"
        validation="required"
        :validation-messages="{
          required: 'Neoznačili ste správnu odpoveď!',
        }"
      />
    </base-card>
    <!-- Otazka -->
    <base-card>
      <FormKit
        type="textarea"
        name="q4"
        label="Otázka 4"
        help="Zadajte text otázky"
        validation="required|length:0,200"
        :validation-messages="{
          length: 'Max dĺžka otázky je 200 znakov!',
          required: 'Nezadali ste text k otázke!',
        }"
      />
      <FormKit
        type="text"
        name="q4a1"
        label="Odpoveď A"
        help="Zadajte odpoveď - A"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q4a2"
        label="Odpoveď B"
        help="Zadajte odpoveď - B"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q4a3"
        label="Odpoveď C"
        help="Zadajte odpoveď - C"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="radio"
        name="q4_good_ans"
        label="Správna odpoveď"
        help="Označte správnu odpoveď k 4. otázke"
        :options="{
          q4a1: 'A',
          q4a2: 'B',
          q4a3: 'C',
        }"
        validation="required"
        :validation-messages="{
          required: 'Neoznačili ste správnu odpoveď!',
        }"
      />
    </base-card>
    <!-- Otazka -->
    <base-card>
      <FormKit
        type="textarea"
        name="q5"
        label="Otázka 5"
        help="Zadajte text otázky"
        validation="required|length:0,200"
        :validation-messages="{
          length: 'Max dĺžka otázky je 200 znakov!',
          required: 'Nezadali ste text k otázke!',
        }"
      />
      <FormKit
        type="text"
        name="q5a1"
        label="Odpoveď A"
        help="Zadajte odpoveď - A"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q5a2"
        label="Odpoveď B"
        help="Zadajte odpoveď - B"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q5a3"
        label="Odpoveď C"
        help="Zadajte odpoveď - C"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="radio"
        name="q5_good_ans"
        label="Správna odpoveď"
        help="Označte správnu odpoveď k 5. otázke"
        :options="{
          q5a1: 'A',
          q5a2: 'B',
          q5a3: 'C',
        }"
        validation="required"
        :validation-messages="{
          required: 'Neoznačili ste správnu odpoveď!',
        }"
      />
    </base-card>
    <!-- Otazka -->
    <base-card>
      <FormKit
        type="textarea"
        name="q6"
        label="Otázka 6"
        help="Zadajte text otázky"
        validation="required|length:0,200"
        :validation-messages="{
          length: 'Max dĺžka otázky je 200 znakov!',
          required: 'Nezadali ste text k otázke!',
        }"
      />
      <FormKit
        type="text"
        name="q6a1"
        label="Odpoveď A"
        help="Zadajte odpoveď - A"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q6a2"
        label="Odpoveď B"
        help="Zadajte odpoveď - B"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q6a3"
        label="Odpoveď C"
        help="Zadajte odpoveď - C"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="radio"
        name="q6_good_ans"
        label="Správna odpoveď"
        help="Označte správnu odpoveď k 6. otázke"
        :options="{
          q6a1: 'A',
          q6a2: 'B',
          q6a3: 'C',
        }"
        validation="required"
        :validation-messages="{
          required: 'Neoznačili ste správnu odpoveď!',
        }"
      />
    </base-card>
    <!-- Otazka -->
    <base-card>
      <FormKit
        type="textarea"
        name="q7"
        label="Otázka 7"
        help="Zadajte text otázky"
        validation="required|length:0,200"
        :validation-messages="{
          length: 'Max dĺžka otázky je 200 znakov!',
          required: 'Nezadali ste text k otázke!',
        }"
      />
      <FormKit
        type="text"
        name="q7a1"
        label="Odpoveď A"
        help="Zadajte odpoveď - A"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q7a2"
        label="Odpoveď B"
        help="Zadajte odpoveď - B"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q7a3"
        label="Odpoveď C"
        help="Zadajte odpoveď - C"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="radio"
        name="q7_good_ans"
        label="Správna odpoveď"
        help="Označte správnu odpoveď k 7. otázke"
        :options="{
          q7a1: 'A',
          q7a2: 'B',
          q7a3: 'C',
        }"
        validation="required"
        :validation-messages="{
          required: 'Neoznačili ste správnu odpoveď!',
        }"
      />
    </base-card>
    <!-- Otazka -->
    <base-card>
      <FormKit
        type="textarea"
        name="q8"
        label="Otázka 8"
        help="Zadajte text otázky"
        validation="required|length:0,200"
        :validation-messages="{
          length: 'Max dĺžka otázky je 200 znakov!',
          required: 'Nezadali ste text k otázke!',
        }"
      />
      <FormKit
        type="text"
        name="q8a1"
        label="Odpoveď A"
        help="Zadajte odpoveď - A"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q8a2"
        label="Odpoveď B"
        help="Zadajte odpoveď - B"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q8a3"
        label="Odpoveď C"
        help="Zadajte odpoveď - C"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="radio"
        name="q8_good_ans"
        label="Správna odpoveď"
        help="Označte správnu odpoveď k 8. otázke"
        :options="{
          q8a1: 'A',
          q8a2: 'B',
          q8a3: 'C',
        }"
        validation="required"
        :validation-messages="{
          required: 'Neoznačili ste správnu odpoveď!',
        }"
      />
    </base-card>
    <!-- Otazka -->
    <base-card>
      <FormKit
        type="textarea"
        name="q9"
        label="Otázka 9"
        help="Zadajte text otázky"
        validation="required|length:0,200"
        :validation-messages="{
          length: 'Max dĺžka otázky je 200 znakov!',
          required: 'Nezadali ste text k otázke!',
        }"
      />
      <FormKit
        type="text"
        name="q9a1"
        label="Odpoveď A"
        help="Zadajte odpoveď - A"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q9a2"
        label="Odpoveď B"
        help="Zadajte odpoveď - B"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q9a3"
        label="Odpoveď C"
        help="Zadajte odpoveď - C"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="radio"
        name="q9_good_ans"
        label="Správna odpoveď"
        help="Označte správnu odpoveď k 9. otázke"
        :options="{
          q9a1: 'A',
          q9a2: 'B',
          q9a3: 'C',
        }"
        validation="required"
        :validation-messages="{
          required: 'Neoznačili ste správnu odpoveď!',
        }"
      />
    </base-card>
    <!-- Otazka -->
    <base-card>
      <FormKit
        type="textarea"
        name="q10"
        label="Otázka 10"
        help="Zadajte text otázky"
        validation="required|length:0,200"
        :validation-messages="{
          length: 'Max dĺžka otázky je 200 znakov!',
          required: 'Nezadali ste text k otázke!',
        }"
      />
      <FormKit
        type="text"
        name="q10a1"
        label="Odpoveď A"
        help="Zadajte odpoveď - A"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q10a2"
        label="Odpoveď B"
        help="Zadajte odpoveď - B"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="text"
        name="q10a3"
        label="Odpoveď C"
        help="Zadajte odpoveď - C"
        validation="required"
        :validation-messages="{
          required: 'Nezadali ste text pre odpoveď!',
        }"
      />
      <FormKit
        type="radio"
        name="q10_good_ans"
        label="Správna odpoveď"
        help="Označte správnu odpoveď k 10. otázke"
        :options="{
          q10a1: 'A',
          q10a2: 'B',
          q10a3: 'C',
        }"
        validation="required"
        :validation-messages="{
          required: 'Neoznačili ste správnu odpoveď!',
        }"
      />
    </base-card>
    <base-button>Vytvoriť test</base-button>
  </FormKit>
</template>

<script>
export default {
  emits: ["save-test"],
  data() {
    return {
      formValues: {},
    };
  },
  methods: {
    saveFormkitForm() {
      let data = new FormData();
      for (const [key, value] of Object.entries(this.formValues)) {
        data.append(key, value);
      }
      data.append("username", this.$store.getters.userId);
      data.append("action", "createNewTest");
      this.$emit("save-test", data);
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
