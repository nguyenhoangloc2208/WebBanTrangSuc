<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/banhang.css" />
  </head>
  <body>
    <div class="container">
      <h2>BÁN HÀNG</h2>

      <div class="price-range">
        <div id="priceFilters" class="hidden">
          <label for="priceRange">Mức giá:</label>
          <select id="priceRange">
            <option value="0-99999999">Tất cả</option>
            <option value="0-999999">Dưới 1.000.000 VND</option>
            <option value="1000000-2999999">1.000.000 - 2.999.999 VND</option>
            <option value="3000000-9999999">3.000.000 - 9.999.999 VND</option>
            <option value="10000000-99999999">10.000.000 VND trở lên</option>
          </select>
          <button id="filterButton">Lọc</button>
        </div>
      </div>

      <div class="table-container">
        <table id="bang">
          <thead>
            <tr>
              <th></th>
              <th>Hàng Hóa</th>
              <th>Đơn giá</th>
              <th>Số lượng</th>
              <th>Thành tiền</th>
            </tr>
          </thead>
          <tbody></tbody>
          <tfoot>
            <tr>
              <td colspan="4">Tổng tiền:</td>
              <td id="tong">0 VND</td>
            </tr>
          </tfoot>
          <footer></footer>
        </table>
      </div>
    </div>
    <script src="./script/banhang.js"></script>
  </body>
</html>
