<template>
  <nav>
    <ul>
        <li><RouterLink to="/">Go to Home</RouterLink></li>
        <li><RouterLink to="/about">Go to About</RouterLink></li>
        <li><RouterLink to="/users">Go to Users</RouterLink></li>
    </ul>
    
  </nav>

  <h1>title here</h1>
  <p>
    <strong>Current route path:</strong> {{ $route.fullPath }}
  </p>
  
  <main>
    <RouterView />
  </main>
</template>

<script>
    export default {
        name: 'app',
        created () {
            document.title = "Martins Vue Testing";
        }
    }
</script>