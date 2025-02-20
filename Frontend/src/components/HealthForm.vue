<script setup>
  import { ref, computed, onMounted } from "vue";
  import axios from "axios";
  const form = ref({
    name: "",
    dob: "",
    age: "",
    weight: "",
    height: "",
    mentor: "",
    wellness: {},
    symptoms: {},
  });
  
  const currentDate = computed(() => new Date().toISOString().split("T")[0]);
  
  const wellnessScore = ref({
    "Nutri-Score": [
        "Raw Food 1% of Body Weight Daily",
        "Plant-Based Whole Food Diet Only",
        "10 Glasses of Water Daily",
        "No Sugar / Caffeine",
        "No Binge Eating",
    ],
    "If Score": [
        "140+               -OPTIMUM                    +5",
        "120+               -GOOD                       +4",
        "100+               -AVERAGE                    +3",
        "80+                -BELOW AVERAGE              +2",
        "60+                -POOR                       +1",
        "LESS THAN 60+      -VERY POOR                   0",
    ],
    "Sleep Score": [
        "Have a Regular Sleep Routine",
        "7-8 Hours of Sleep at Night",
        "No Snoring",
        "No Blue Light Exposure Just Before Bed",
        "No Eating Just Before Going To Bed",
    ],
    "Physical Activity Score": [
        "4000 Steps Before 1st Meal",   
        "10,000 Steps During the Day",
        "250 Steps Per Waking Hour",
        "10 Zone Minutes Per Day",
        "Yoga/Cycling/ETC",
    ],
  });
  
  const symptomsScore = ref({
    "BCA": ["VF > 10", "BF > 25 (M) / 30 (F)", "MM > 30", "BA > CA", "BMI > 23"],
    "Metabolic Syndrome": ["Blood Pressure (High)", "Sugar(High)", "TG(High)", "HDL(Low)", "HIP/WAIST Ratio *Men>1 *Women>0.80"],
    "Harmonal Issues": ["Thyroid", "Skin Issue/HairFall", "Sleeping Disorder", "Mental Health Issue", "PCOD", "Fatigue"],
    "GUT Health": ["Acidity", "Bloating/Gas/Excess Burping", "IBS", "Constipation", "Gall Bladder Problems"],
  });

  const initializeForm = () => {
  for (const category in wellnessScore.value) {
    if (!form.value.wellness[category]) {
      form.value.wellness[category] = {}; 
    }
    wellnessScore.value[category].forEach((item) => {
      if (form.value.wellness[category][item] === undefined) {
        form.value.wellness[category][item] = false; 
      }
    });
  }

  for (const category in symptomsScore.value) {
    if (!form.value.symptoms[category]) {
      form.value.symptoms[category] = {}; 
    }
    symptomsScore.value[category].forEach((item) => {
      if (form.value.symptoms[category][item] === undefined) {
        form.value.symptoms[category][item] = false; 
      }
    });
  }
};


onMounted(() => {
  initializeForm();
});

const submitForm = async () => {
  try {
    const response = await axios.post("http://127.0.0.1:8000/api/health-scores", form.value);
    alert("Health Score saved successfully!");
    console.log("Success:", response.data);
  } catch (error) {
    console.error("Error saving health score:", error.response?.data);
    alert("Failed to save health score. Please try again.");
  }
};
</script>

<template>
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
      
      <div class="flex justify-between border-b pb-4">
        <h2 class="text-xl font-bold">Health Score Form</h2>
        <span class="text-gray-600 text-sm">Date: {{ currentDate }}</span>
      </div>
  
      <div class="grid grid-cols-2 gap-4 mt-4">
      <input v-model="form.name" type="text" placeholder="Name" class="input" />
      <input v-model="form.dob" type="date" class="input" />
      <input v-model="form.age" type="number" placeholder="Age" class="input" />
      <input v-model="form.weight" type="number" placeholder="Weight (kg)" class="input" />
      <input v-model="form.height" type="number" placeholder="Height (cm)" class="input" />
      <input v-model="form.mentor" type="text" placeholder="Mentor's Name" class="input" />
    </div>

  
      <div class="grid grid-cols-2 gap-6 mt-6">
        
        <div class="border p-4 rounded-lg">
          <h3 class="text-lg font-bold text-blue-600 text-center bg-blue-100 py-2">WELLNESS SCORE</h3>
          <p class="text-sm text-gray-600 text-center">YES - 1 | NO - 0</p>
  
          <div v-for="(items, category) in wellnessScore" :key="category">
            <h4 class="font-semibold mt-2">{{ category }}</h4>
            <div v-for="(item, index) in items" :key="index" class="flex items-center mt-2">
              <input type="checkbox" v-model="form.wellness[item]" class="checkbox" />
              <label class="ml-2">{{ item }}</label>
            </div>
          </div>
        </div>
  
        
        <div class="border p-4 rounded-lg">
          <h3 class="text-lg font-bold text-red-600 text-center bg-red-100 py-2">SYMPTOMS SCORE</h3>
          <p class="text-sm text-gray-600 text-center">YES - 1 | NO - 0</p>
  
          <div v-for="(items, category) in symptomsScore" :key="category">
            <h4 class="font-semibold mt-2">{{ category }}</h4>
            <div v-for="(item, index) in items" :key="index" class="flex items-center mt-2">
              <input type="checkbox" v-model="form.symptoms[item]" class="checkbox" />
              <label class="ml-2">{{ item }}</label>
            </div>
          </div>
        </div>
      </div>
  
     
      <div class="mt-6 text-center">
        <button @click="submitForm" class="btn">Submit</button>
      </div>
    </div>
  </template>
  
  
<style scoped>
.input {
@apply border p-2 w-full rounded-lg focus:ring focus:ring-blue-200;
}
.checkbox {
@apply w-4 h-4 text-blue-600 focus:ring-blue-500;
}
.btn {
@apply bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700;
}
</style>
  