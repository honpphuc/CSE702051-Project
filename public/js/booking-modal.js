
document.addEventListener("DOMContentLoaded", function () {
  const bookingModal = document.getElementById("booking-modal");
  const closeModalBtn = document.getElementById("close-modal");
  const bookButtons = document.querySelectorAll(
    "button:not(#close-modal):not(.time-slot):not(#confirm-booking)"
  );
  const timeSlots = document.querySelectorAll(".time-slot");
  const fieldPrice = document.getElementById("field-price");
  const serviceFee = document.getElementById("service-fee");
  const totalPrice = document.getElementById("total-price");
  const confirmBookingBtn = document.getElementById("confirm-booking");
  const modalFieldName = document.getElementById("modal-field-name");
  const modalFieldAddress = document.getElementById("modal-field-address");
  const modalFieldImage = document.getElementById("modal-field-image");
  const bookingDate = document.getElementById("booking-date");

  const today = new Date().toISOString().split("T")[0];
  bookingDate.min = today;
  bookingDate.value = today;

  bookButtons.forEach((button) => {
    if (button.textContent.trim() === "Đặt sân") {
      button.addEventListener("click", function () {
        const card = this.closest(".bg-white");
        if (card) {
          const fieldName = card.querySelector("h3").textContent;
          const fieldAddress = card.querySelector(".text-sm.text-gray-600").textContent;
          const fieldImg = card.querySelector("img").src;

          modalFieldName.textContent = fieldName;
          modalFieldAddress.textContent = fieldAddress;
          modalFieldImage.src = fieldImg;
        }

        bookingModal.classList.remove("hidden");
        document.body.style.overflow = "hidden";
      });
    }
  });

  closeModalBtn.addEventListener("click", function () {
    bookingModal.classList.add("hidden");
    document.body.style.overflow = "auto";
  });

  bookingModal.addEventListener("click", function (e) {
    if (e.target === bookingModal) {
      bookingModal.classList.add("hidden");
      document.body.style.overflow = "auto";
    }
  });

  timeSlots.forEach((slot) => {
    slot.addEventListener("click", function () {
      timeSlots.forEach((s) => {
        s.classList.remove("bg-primary", "text-white");
        s.classList.add("border-gray-300");
      });

      this.classList.add("bg-primary", "text-white");
      this.classList.remove("border-gray-300");

      const price = parseInt(this.dataset.price);
      fieldPrice.textContent = price.toLocaleString("vi-VN") + "đ";
      const fee = Math.round(price * 0.05);
      serviceFee.textContent = fee.toLocaleString("vi-VN") + "đ";
      const total = price + fee;
      totalPrice.textContent = total.toLocaleString("vi-VN") + "đ";
    });
  });

  if (timeSlots.length > 0) {
    timeSlots[0].click();
  }

  confirmBookingBtn.addEventListener("click", function () {
    alert("Đặt sân thành công! Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi.");
    bookingModal.classList.add("hidden");
    document.body.style.overflow = "auto";
  });
});
