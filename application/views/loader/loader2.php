<style>
  body {
  display: flex;
  height: 100vh;
  justify-content: center;
  align-items: center;
  /* background: #222; */
}

.loading {
  display: flex;
}
.loading .dot {
  position: relative;
  width: 2em;
  height: 2em;
  margin: 0.8em;
  border-radius: 50%;
}
.loading .dot::before {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  background: inherit;
  border-radius: inherit;
  animation: wave 2s ease-out infinite;
}
.loading .dot:nth-child(1) {
  background: #7ef9ff;
}
.loading .dot:nth-child(1)::before {
  animation-delay: 0.2s;
}
.loading .dot:nth-child(2) {
  background: #89cff0;
}
.loading .dot:nth-child(2)::before {
  animation-delay: 0.4s;
}
.loading .dot:nth-child(3) {
  background: #4682b4;
}
.loading .dot:nth-child(3)::before {
  animation-delay: 0.6s;
}
.loading .dot:nth-child(4) {
  background: #0f52ba;
}
.loading .dot:nth-child(4)::before {
  animation-delay: 0.8s;
}
.loading .dot:nth-child(5) {
  background: #000080;
}
.loading .dot:nth-child(5)::before {
  animation-delay: 1s;
}

@keyframes wave {
  50%, 75% {
    transform: scale(2.5);
  }
  80%, 100% {
    opacity: 0;
  }
}
</style>

<div class="loading">
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
</div>