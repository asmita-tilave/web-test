<template>
  <div class="container">
    <div class="flex">
      <div class="block mr-4 max-w-sm card-style">
        <img
          class="withdraw"
          src="/images/total-withdrawal.png"
          alt="total-withdrawal"
        />
        <div class="flex p-3">
          <img
            class="w-10 h-10 mr-5"
            src="/images/roi_income.png"
            alt="roi_income"
          />
          <img
            class="h-12 w-36"
            src="/images/roi_income1.png"
            alt="roi_income"
          />
        </div>
        <div class="md:mb-0 mb-6 flex-shrink-0 flex flex-col ml-4">
          <span class="mt-1 text-gray-500 text-sm">ROI Income</span>
          <span class="amount-font text-gray-700 mb-2">4280.884 TRX</span>
        </div>
      </div>

      <!---2nd card-->
      <div class="block mr-4 max-w-sm card-style">
        <img
          class="withdraw"
          src="/images/direct-income2.png"
          alt="direct-income2"
        />
        <div class="flex p-3">
          <img
            class="w-10 h-10 mr-5"
            src="/images/direct_income.png"
            alt="direct_income"
          />
          <img
            class="h-12 w-36"
            src="/images/direct_income1.png"
            alt="direct_income1"
          />
        </div>
        <div class="md:mb-0 mb-6 flex-shrink-0 flex flex-col ml-4">
          <span class="mt-1 text-gray-500 text-sm">Direct Income</span>
          <span class="amount-font text-gray-700 mb-2">132.720 TRX</span>
        </div>
      </div>

      <!---3rd card-->
      <div class="block mr-4 max-w-sm card-style">
        <img
          class="withdraw"
          src="/images/binary-income.png"
          alt="binary-income"
        />
        <div class="flex p-3">
          <img
            class="w-10 h-10 mr-5"
            src="/images/binary_income.png"
            alt="binary_income"
          />
          <img
            class="h-12 w-36"
            src="/images/binary_income1.png"
            alt="binary_income1"
          />
        </div>
        <div class="md:mb-0 mb-6 flex-shrink-0 flex flex-col ml-4">
          <span class="mt-1 text-gray-500 text-sm">Binary Income</span>
          <span class="amount-font text-gray-700 mb-2">57.840 TRX</span>
        </div>
      </div>

      <!---4th card-->
      <div class="block max-w-sm card-style">
        <img
          class="withdraw"
          src="/images/earning-limit.png"
          alt="earning-limit.png"
        />
        <div class="flex p-3">
          <img
            class="w-10 h-10 mr-5"
            src="/images/current_earning_limit.png"
            alt="current_earning_limit"
          />
          <img
            class="h-12 w-36"
            src="/images/current_earning_limit1.png"
            alt="current_earning_limit1"
          />
        </div>
        <div class="md:mb-0 mb-6 flex-shrink-0 flex flex-col ml-4">
          <span class="mt-1 text-gray-500 text-sm">Current Earning Limit</span>
          <span class="amount-font text-gray-700 mb-2">14460 TRX</span>
        </div>
      </div>
    </div>

    <!---second secton-->

    <section class="text-gray-600 body-font">
      <div class="container mx-auto flex flex-wrap p-0">
        <div class="flex flex-wrap w-full">
          <div class="lg:w-1/4 md:w-1/2 md:pr-10 md:py-6">
            <div class="p-4 max-w-sm sm:p-6 left-sec-card">
              <img
                class="top-img"
                src="/images/roi-retopup.png"
                alt="roi-retopup"
              />

              <div class="flex flex-col items-center mt-3">
                <span class="roi-font">ROI</span>
                <span class="small-roi-text">(Retopup Reminder)</span>
              </div>

              <div class="flex flex-col items-center mt-3">
                <img
                  class="flex flex-col items-center watch-size"
                  src="/images/watch.png"
                  alt="watch"
                />
              </div>

              <div class="flex flex-col items-center mt-5">
                <span class="small-roi-text">00 Hours</span>
              </div>
            </div>
          </div>

          <div
            class="flex lg:w-3/4 md:w-1/2 rounded-lg right-inner-content p-6 mt-4"
          >
            <div class="card-left-block">
              <div class="block mr-4 max-w-sm card-style card-shadow">
                <img
                  class="withdraw"
                  src="/images/total-active-deposits1.png"
                  alt="total-active-deposits1"
                />
                <div class="flex p-3">
                  <img
                    class="w-10 h-10 mr-5"
                    src="/images/total_active_deposits.png"
                    alt="total_active_deposits"
                  />
                </div>
                <div class="md:mb-0 mb-6 flex-shrink-0 flex flex-col ml-4">
                  <span class="mt-1 text-gray-500 text-sm"
                    >Total Active Deposits</span
                  >
                  <span class="amount-font text-gray-700 mb-2">348 TRX</span>
                </div>
              </div>

              <!---2nd card-->
              <div class="block mt-5 mr-4 max-w-sm card-style">
                <img
                  class="withdraw"
                  src="/images/total-withdrawal1.png"
                  alt="total-withdrawal1"
                />
                <div class="flex p-3">
                  <img
                    class="w-10 h-10 mr-5"
                    src="/images/total_withdrawal.png"
                    alt="total_withdrawal"
                  />
                </div>
                <div class="md:mb-0 mb-6 flex-shrink-0 flex flex-col ml-4">
                  <span class="mt-1 text-gray-500 text-sm"
                    >Total Withdrawal</span
                  >
                  <span class="amount-font text-gray-700 mb-2"
                    >3615.000 TRX</span
                  >
                </div>
              </div>
            </div>

            <div class="right-subcontent">
              <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                <span class="right-text-font">My Total Earnings</span>
                <span class="mt-1 right-subtext-font">4471.440 TRX</span>
              </div>
              <div class="img-right">
                <img
                  src="/images/my_total_earning.png"
                  alt="my_total_earning"
                />
                <div class="flex month-bar">
                  <p>feb</p>
                  <p>Mar</p>
                  <p>Apr</p>
                  <p>May</p>
                  <p>Jun</p>
                  <p>Jul</p>
                  <p>Aug</p>
                  <p>Sept</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!---button section-->
    <div class="flex w-full">
      <div class="w-1/2">
        <button class="px-4 two-btn-style">Add Fund</button>
      </div>

      <div class="w-1/2">
        <button class="px-4 two-btn-style">Withdrow</button>
      </div>
    </div>

    <!--3rd card section-->

    <div class="flex flex-col graph-section mt-5 p-5">
      <div class="top-ele-graph">
        <p>1M</p>
        <p>3M</p>
        <p>1Y</p>
        <div class="all-ele">All</div>
      </div>
      <div class="flex">
        <div class="number-bar">
          <p class="num1">12:00 AM</p>
          <p class="num2">12:00 PM</p>
          <p class="num3">12:00 AM</p>
        </div>

        <img class="graph-img" src="/images/graph.png" alt="graph" />
      </div>

      <div class="flex year-bar">
        <p>10 - 18</p>
        <p>10 - 25</p>
        <p>11 - 01</p>
        <p>11 - 15</p>
        <p>11 - 22</p>
        <p>11 - 29</p>
        <p>12 - 06</p>
        <p>12 - 20</p>
      </div>
      <div class="flex graph-bar space-around mt-2">
        <p>2021 - 10</p>
        <p>2021 - 11</p>
        <p>2021 - 11</p>
        <p>2021 - 11</p>
        <p>2021 - 12</p>
        <p>2021 - 12</p>
      </div>

      <div class="flex space-around mt-3 ellipse-bar">
        <div class="flex justify-center">
          <img class="ellipse" src="/images/Ellipse 1310.png" alt="Ellipse" />
          <p class="ml-3">ROI</p>
        </div>
        <div class="flex justify-center">
          <img class="ellipse" src="/images/Ellipse 1311.png" alt="Ellipse" />
          <p class="ml-3">Direct</p>
        </div>
        <div class="flex justify-center">
          <img class="ellipse" src="/images/Ellipse 1312.png" alt="Ellipse" />
          <p class="ml-3">Binary</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
