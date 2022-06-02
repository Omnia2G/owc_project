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
      </p><br>
      <p>1.Krok: zadajte titul testu</p>
      <p>2.Krok: vyberte tému</p>
      <p>3.Krok: vyplňte formulár, a všade označte správnu odpoveď!</p>
      <p>4.Krok: odoslať formulár</p><br>
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
    <base-button>{{ edit ? "Uložiť zmeny" : "Vytvoriť test" }}</base-button>
  </FormKit>
</template>

<script>
export default {
  props: ["test", "edit"],
  emits: ["save-test", "edit-test"],
  data() {
    return {
      formValues: {},
      questionsHelp: [
        {
          text: "q1",
          answera: "q1a1",
          answerb: "q1a2",
          answerc: "q1a3",
          goodanswer: "q1_good_ans",
        },
        {
          text: "q2",
          answera: "q2a1",
          answerb: "q2a2",
          answerc: "q2a3",
          goodanswer: "q2_good_ans",
        },
        {
          text: "q3",
          answera: "q3a1",
          answerb: "q3a2",
          answerc: "q3a3",
          goodanswer: "q3_good_ans",
        },
        {
          text: "q4",
          answera: "q4a1",
          answerb: "q4a2",
          answerc: "q4a3",
          goodanswer: "q4_good_ans",
        },
        {
          text: "q5",
          answera: "q5a1",
          answerb: "q5a2",
          answerc: "q5a3",
          goodanswer: "q5_good_ans",
        },
        {
          text: "q6",
          answera: "q6a1",
          answerb: "q6a2",
          answerc: "q6a3",
          goodanswer: "q6_good_ans",
        },
        {
          text: "q7",
          answera: "q7a1",
          answerb: "q7a2",
          answerc: "q7a3",
          goodanswer: "q7_good_ans",
        },
        {
          text: "q8",
          answera: "q8a1",
          answerb: "q8a2",
          answerc: "q8a3",
          goodanswer: "q8_good_ans",
        },
        {
          text: "q9",
          answera: "q9a1",
          answerb: "q9a2",
          answerc: "q9a3",
          goodanswer: "q9_good_ans",
        },
        {
          text: "q10",
          answera: "q10a1",
          answerb: "q10a2",
          answerc: "q10a3",
          goodanswer: "q10_good_ans",
        },
      ],
      ids:[],
    };
  },
  methods: {
    saveFormkitForm() {
      let data = new FormData();
      for (let [key, value] of Object.entries(this.formValues)) {
        data.append(key, value);
      }
      if (this.edit) {
        data.append("username", this.test[0].username);
        data.append("oldTitle", this.test[0].title);
        data.append("oldCourse", this.test[0].course);
        data.append('ids', JSON.stringify(this.ids));
        data.append("action", "editTest");
        this.$emit("edit-test", data);
      } else {
        data.append("username", this.$store.getters.userId);
        data.append("action", "createNewTest");
        this.$emit("save-test", data);
      }
    },
    loadDetailsForEdit(){
      let i = 0;
      let ids = [];
      this.formValues["title"] = this.test[0]["title"];
      this.formValues["course"] = this.test[0]["course"];
      for (let item of this.questionsHelp) {
        for (let [key, value] of Object.entries(item)) {
          this.formValues[value] = this.test[i][key];
        }
        ++i;
      }
      ids.push(this.test[0].testid);
       for (let item of this.test) {
       ids.push(item.id);
      }
      this.ids = ids;
    },
  },
  mounted() {
    if (this.test) {
      this.loadDetailsForEdit();
    }
  },
};
</script>

