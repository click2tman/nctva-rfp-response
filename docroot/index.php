<?php include "theme/templates/header.php"; ?>
<h2>Welcome to this demo application for NCTVA Sierra Leone</h2>
<h3>By NICHE TECHNOLOGIES (SL) LIMITED</h3>
<p>This is the main page where you can navigate the various tables. You can create new data and view the data. You can also see the results of the specific queries requested below.</p>
<table>
  <thead>
    <th><h2>Providers</h2></th>
    <th><h2>Campus</h2></th>
    <th><h2>City</h2></th>
    <th><h2>Profession</h2></th>
    <th><h2>Enrollments</h2></th>
    <th><h2>Students</h2></th>
    <th><h2>Educational Service</h2></th>
  </thead>
    <tbody>
      <tr>
        <td>
            <ul>
              <li>
                <a href="create-provider.php"><strong>Create</strong></a> Provider
              </li>
              <li>
                <a href="read-provider.php"><strong>Read</strong></a> Provider
              </li>
            </ul>
        </td>
        <td>
            <ul>
              <li>
                <a href="create-campus.php"><strong>Create</strong></a> Campus
              </li>
              <li>
                <a href="read-campus.php"><strong>Read</strong></a> Campus
              </li>
            </ul>
        </td>
        <td>
            <ul>
              <li>
                <a href="create-city.php"><strong>Create</strong></a> City
              </li>
              <li>
                <a href="read-city.php"><strong>Read</strong></a> City
              </li>
            </ul>
          </td>
          <td>
            <ul>
            <li>
              <a href="create-profession.php"><strong>Create</strong></a> Profession
            </li>
            <li>
              <a href="read-profession.php"><strong>Read</strong></a> Profession
            </li>
            </ul>
          </td>
          <td>
            <ul>
            <li>
              <a href="create-enrollment.php"><strong>Create</strong></a> Enrollment
            </li>
            <li>
              <a href="read-enrollment.php"><strong>Read</strong></a> Enrollment
            </li>
            </ul>
          </td>
          <td>
            <ul>
            <li>
              <a href="create-student.php"><strong>Create</strong></a> Student
            </li>
            <li>
              <a href="read-student.php"><strong>Read</strong></a> Student
            </li>
          </ul>
          </td>
          <td>
            <ul>
            <li>
              <a href="create-educational-service.php"><strong>Create</strong></a> Educational Service
            </li>
            <li>
              <a href="read-educational-service.php"><strong>Read</strong></a> Educational Service
            </li>
          </ul>
          </td>
    </tr>
    </tbody>
    </table>

  <h2>Database queries</h2>
    <ol>
      <li><a href="view-query-2.php"><strong>Query 1:</strong></a>
      List of all professions that have been offered in the year 2012 and 2013 (both) in Kenema or in Bo (in one or in both)
      </li>
      <li><a href="view-query-3.php"><strong>Query 2:</strong></a>
        Total numbers of students enrolled in the years 2010, 2011, 2012, and 2013 (number of students per year).
      </li>
      <li><a href="view-query-4.php"><strong>Query 3:</strong></a>
        List of all campuses (including the name of the TVET provider) that did never offer a specific profession (let's say "Welding", identified by the primary key 4)
      </li>
      <li><a href="view-query-5.php"><strong>Query 4:</strong></a>
        List of all cities in which a course for hairdressing (let's say this is primary key 7) is offered in 2018
      </li>
      <li><a href="view-query-6.php"><strong>Query 5:</strong></a>
        List of all TVET providers and the total number of ever enrolled students with each
      </li>
      <li><a href="view-query-7.php"><strong>Query 6:</strong></a>
        List of all TVET providers that have students enrolled who do not have an NCTVA-ID yet
      </li>
    </ol>
<?php include "theme/templates/footer.php"; ?>
