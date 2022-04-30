<template>
  <form @submit.prevent="submitTest">
    <base-card>
      <p>
        Tu sa dá vytvoriť test s 10 otázkami a odpoveďami typu A,B,C - pre
        jednotlivé témy.
      </p>
      <p>1.Krok: zadajte titul testu</p>
      <p>2.Krok: vyberte tému</p>
      <p>3.Krok: vyplňte formulár, a všade označte správnu odpoveď!</p>
      <p>4.Krok: odoslať formulár</p>
      <label for="title">Titul testu</label>
      <input type="text" id="title" name="title" v-model="title" /><br /><br />
      <label for="courses">Vyberte tému testu</label>
      <select name="courses" id="courses" v-model="course">
        <option disabled value="">Témy</option>
        <option value="vlc">VLC</option>
        <option value="occ">OCC</option>
        <option value="irc">IRC</option>
        <option value="fso">FSO</option>
        <option value="uvc">UVC</option>
        <option value="lifi">LI-FI</option></select
      ><br /><br />
    </base-card>
    <base-card>
      <div class="form-control">
        <label for="q1">1. Otázka</label>
        <textarea id="q1" name="q1" v-model="q1.q" rows="4"></textarea>
      </div>
      <div class="form-control">
        <label for="q1a1">Odpoveď A</label>
        <input type="text" id="q1a1" name="q1a1" v-model="q1.a1" />
      </div>
      <div class="form-control">
        <label for="q1a2">Odpoveď B</label>
        <input type="text" id="q1a2" name="q1a2" v-model="q1.a2" />
      </div>
      <div class="form-control">
        <label for="q1a3">Odpoveď C</label>
        <input type="text" id="q1a3" name="q1a3" v-model="q1.a3" />
      </div>
      <div class="form-control">
        <p>Vyberte správnu odpoveď!</p>
        <label for="q1gA">A</label>
        <input
          type="radio"
          id="q1gA"
          name="good_ans_1"
          value="a1"
          v-model="q1.goodA"
        />

        <label for="q1gB">B</label>
        <input
          type="radio"
          id="q1gB"
          name="good_ans_1"
          value="a2"
          v-model="q1.goodA"
        />

        <label for="q1gC">C</label>
        <input
          type="radio"
          id="q1gC"
          name="good_ans_1"
          value="a3"
          v-model="q1.goodA"
        />
        <p class="error" v-if="!q1.isValid">
          Vyplňte všetky polia pre otázku 1
        </p>
      </div>
    </base-card>
    <base-button>Vytvoriť test</base-button>
  </form>
</template>

<script>
export default {
  data() {
    return {
      title: "",
      course: "",
      q1: {
        q: "",
        a1: "",
        a2: "",
        a3: "",
        goodA: "", //good answer for q1
        isValid: true,
      },
    
    q2:[
        {text: 'q', val: 'question2'},
        {text: 'a1', val: 'A'},
        {text: 'a2', val: 'B'},
        {text: 'a3', val: 'C'},
        {text: 'goodA', val: 'B'},
        {text: 'isValid', val: true},
    ],
    

      formIsValid: false,
      isLoading: false,
      error: null,
    };
  },
  methods: {
      
    validate() {
      if (this.title === "" || this.course === "") {
        this.formIsValid = false;
        this.q1.isValid = false;
      } else {
        // title && course true
        if (
          this.q1.q === "" ||
          this.q1.a1 === "" ||
          this.q1.a2 === "" ||
          this.q1.a3 === "" ||
          this.q1.goodA === ""
        ) {
          this.q1.isValid = false;
          this.formIsValid = false;
        } else {
          this.q1.isValid = true;
          this.formIsValid = true;
        }
      }
    },
    clearValidity(input) {
      this[input].isValid = true;
    },
    submitTest() {
      this.validate();
      if (!this.formIsValid) {
        return;
      }
      


      console.log(this.title);
      console.log(this.courses);
      console.log(this.q1.q);
      console.log(this.q1.a1);
      console.log(this.q1.a2);
      console.log(this.q1.a3);
      console.log(this.q1.goodA);
   
    },
  },
};
</script>

<style scoped>
.form-control {
  margin: 0.5rem 0;
}

label {
  font-weight: bold;
  display: block;
  margin-bottom: 0.5rem;
}

input[type="checkbox"] + label {
  font-weight: normal;
  display: inline;
  margin: 0 0 0 0.5rem;
}

input,
textarea {
  display: inline-flex;
  width: 15rem;
  border: 1px solid #ccc;
  font: inherit;
}

input:focus,
textarea:focus {
  background-color: #f0e6fd;
  outline: none;
  border-color: #3d008d;
}

input[type="radio"] {
  display: inline;
  width: auto;
  border: none;
}

input[type="checkbox"]:focus {
  outline: #3d008d solid 1px;
}

h3 {
  margin: 0.5rem 0;
  font-size: 1rem;
}

.invalid label {
  color: red;
}

.invalid input,
.invalid textarea {
  border: 1px solid red;
}
.error {
  color: red;
}
</style>
