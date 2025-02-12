<template>
  <div>
    <h1>掃除当番アプリ</h1>
    <table>
      <tr>
        <th>担当者</th>
        <th>担当席</th>
        <th>掃除方法</th>
        <th>使う道具</th>
      </tr>
      <tr v-for="task in tasks" :key="task.id">
        <td>{{ task.user.name }}</td>
        <td>{{ task.area }}</td>
        <td>{{ task.method }}</td>
        <td>{{ task.tools }}</td>
      </tr>
    </table>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      tasks: [],
    };
  },
  async created() {
    try {
      const response = await axios.get('http://127.0.0.1:8000/api/tasks');
      this.tasks = response.data;
    } catch (error) {
      console.error('データ取得エラー:', error);
    }
  },
};
</script>
