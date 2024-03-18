   @extends('layouts.frontend.master')

   @section('content')
  <div class="live-tender-wrapper">
            <h1 class="tender-title">Live Tender List</h1>
            <div class="live-tender-search-bar">
              <button class="search-btn">Search</button>
              <input
                type="text"
                placeholder="like Tender number, Method, Date, Participation and Evaluation Type etc."
              />
            </div>
            <div class="live-table-wrapper">
              <h2 class="table-text-list">Tender Information List</h2>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead class="tender-table-header">
                    <tr>
                      <th scope="col">Tender No.</th>
                      <th scope="col">Tender Title</th>
                      <th scope="col">Publish Date</th>
                      <th scope="col">Last Submission Date</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody class="tender-table-body">
                    <tr
                      class="clickable-row"
                      onclick="window.location='/tender-details.html';"
                    >
                      <td>BPD/2024/RFQ-537</td>
                      <td>RFQ for the supply of Brick and Bricks Chips</td>
                      <td>05/03/2024</td>
                      <td>15/03/2024</td>
                      <td>Published</td>
                    </tr>
                    <tr
                      class="clickable-row"
                      onclick="window.location='/tender-details.html';"
                    >
                      <td>BPD/2024/RFQ-537</td>
                      <td>RFQ for the supply of Brick and Bricks Chips</td>
                      <td>05/03/2024</td>
                      <td>15/03/2024</td>
                      <td>Published</td>
                    </tr>
                    <tr
                      class="clickable-row"
                      onclick="window.location='/tender-details.html';"
                    >
                      <td>BPD/2024/RFQ-537</td>
                      <td>RFQ for the supply of Brick and Bricks Chips</td>
                      <td>05/03/2024</td>
                      <td>15/03/2024</td>
                      <td>Published</td>
                    </tr>
                    <tr
                      class="clickable-row"
                      onclick="window.location='/tender-details.html';"
                    >
                      <td>BPD/2024/RFQ-537</td>
                      <td>RFQ for the supply of Brick and Bricks Chips</td>
                      <td>05/03/2024</td>
                      <td>15/03/2024</td>
                      <td>Published</td>
                    </tr>
                    <tr
                      class="clickable-row"
                      onclick="window.location='/tender-details.html';"
                    >
                      <td>BPD/2024/RFQ-537</td>
                      <td>RFQ for the supply of Brick and Bricks Chips</td>
                      <td>05/03/2024</td>
                      <td>15/03/2024</td>
                      <td>Published</td>
                    </tr>
                    <tr
                      class="clickable-row"
                      onclick="window.location='/tender-details.html';"
                    >
                      <td>BPD/2024/RFQ-537</td>
                      <td>RFQ for the supply of Brick and Bricks Chips</td>
                      <td>05/03/2024</td>
                      <td>15/03/2024</td>
                      <td>Published</td>
                    </tr>
                    <tr
                      class="clickable-row"
                      onclick="window.location='/tender-details.html';"
                    >
                      <td>BPD/2024/RFQ-537</td>
                      <td>RFQ for the supply of Brick and Bricks Chips</td>
                      <td>05/03/2024</td>
                      <td>15/03/2024</td>
                      <td>Published</td>
                    </tr>
                    <tr
                      class="clickable-row"
                      onclick="window.location='/tender-details.html';"
                    >
                      <td>BPD/2024/RFQ-537</td>
                      <td>RFQ for the supply of Brick and Bricks Chips</td>
                      <td>05/03/2024</td>
                      <td>15/03/2024</td>
                      <td>Published</td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
              <!-- Pagination -->
              <div class="pagination">
                <button class="prev">Previous</button>
                <span class="page-numbers"></span>
                <button class="next">Next</button>
              </div>
            </div>
          </div>
   @endsection
