<html>

<head>
<link rel="shortcut icon" type="image/png" href="images\favicon.png">
</link>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta name = "keywords" content="Computer,Science,IB"/>
<meta name = "description" content="This is a page for Web Science in IB Computer Science SL and it explains how searching the Web works">
</head>
    
<body>
<a class="active" href= "index.html">
<div class="header">
    
<h1 class="display-2" style="color:black">IB Diploma Computer Science</h1> 
    </div>
    </a>

<form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html">Computer Science</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
     <div class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Topic1.html">Topic 1: System fundamentals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Topic2.html">Topic 2: Computer organization</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Topic3.html">Topic 3: Networks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Topic4.html">Topic 4: Computational thinking, problem-solving</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Topic5.html">Topic C: Web Science</a>
      </li>
    </ul>
  </div>
</div>
</nav>
</link>

<link rel="stylesheet" type="text/css" href="style.css" title="style">
<div class = "chapter"> C.2 Searching the Web </div> <br>
<div class = "syllabus"> <h2><u>C.2.1</u></h2>Explain, with the reference to the three parts of the search engine, why user searches always return results from a historical version of the web including diagrams </div> <br>
<img src="images/crawler.png" align="right" height="250" width="350">
<img src="images/webindexing.jpg" align="right" height="250" width="350">
<div class="chapter2"> 
<h3>3 parts of the Search Engine: </h3>
<h5> <ul> <li>Web Crawler </li>
          <li>Web Indexing </li>
          <li>Search Interface</li> </ul> </h5> <br>
The Web Crawler does not search for the actual web immediately, it searches the index of the web and it either presents the index history or the updated version of the index if the web has been changed. 
</div>

<div class = "syllabus"> <h2><u>C.2.2</u></h2>C.2.2 Investigate access to the dark web and explain the purpose and functionality of the additional software this requires </div> <br>
<div class="chapter2">
<h3>Surface Web:</h3>
<h5> <ul> <li> Visible Web </li>
          <li> Available to the public </li>
          <li> Searchable with search engines </li> </ul></h5>
<br>
<h3>Deep Web:</h3>
<h5> <ul> <li> Invisible (Hidden) Web </li>
          <li> Contents are not indexed by search engines </li> </ul></h5>
<br>
<h3>Dark Web:</h3>
<h5> <ul> <li> Unindexed Web that requires additional software in order to increase anonymity </li>
          <li> Often used for illegal purposes, such as drugs </li> </ul></h5>
</div>

<div class = "syllabus"> <h2><u>C.2.3</u></h2>C.2.3 The pages A, B and C would each be treated very differently by PageRank.  Explain these differences. </div> <br>
<div class="chapter2">
<h3>Page Rank:</h3> <img src="images/pagerank.jpg">
<h5> <br> <ul> <li> Page ranks higher if it is linked by other pages </li>
          <li> Often used by Google </li> 
          <li> Page A has the highest rank among these three pages, as a lot of pages have linked to Page A</li>
          <li> Whereas Page B has the lowest rank, as it links to many other pages</li>
          <li> Page C is in the middle of Page A and Page B, as Page C both links and gets linked by other pages</li></ul></h5>
</div>

<div class ="syllabus"> <h2><u>C.2.5</u></h2>C.2.5 Discuss the relationship between data in a meta-tag and how it is accessed by a web crawler</div> <br>
<div class="chapter2">
<h3>Meta Tags:</h3> <img src="images/metatag.jpg" width="1000">
<h5> <br> <ul> <li> Meta tags are read by Web Crawler</li>
               <li> The Meta Tags used above will be displayed by search engines as part of the search results</li>
               <li> For example, "&ltmeta name="keywords" content="Computer,Science,IB"&gt", if the user searches the following keywords on the search engine, the web crawler would read my page's meta tags and it will display my page onto the search engine if my page also has higher page rank </li> 
               <li>Types of Meta Tags
                <ul> <li> Title Tag: it helps search engines to understand the content of the page, therefore it finds out if the content of the page is relevant to the information that the user is looking for </li>
                <li> Description tag: it describes the web page and it is shown with the results of the search</li> </ul></li></h5>
</div>

<div class="syllabus"> <h2><u>C.2.9 & C.2.11</u></h2>C.2.9 & C.2.11 List a number of metrics used by search engines and discuss how white hat and/or black hat SEO could take advantage of each of them</div> <br>
<div class="chapter2">
<h3>Types of Obvious Metrics:</h3>
<ul> <li> In-Links </li>
               <li> Out-Links </li> </ul>
<br> <h3> Other Metrics:</h3>
<ul> <li>Frequency of Updates</li>
               <li>Browsing History</li>
               <li>Scam Reports</li>
               <li>Keyword Diversity</li>
               <li>Unique Visitors</li>
               <li>Returning Visitors</li>
               <li>Duration of Visit</li>
               <li>Location of Visitor</li>
               <li>Conversion rate:</li>
               <ul> <li>Purchase</li>
                    <li>Post</li>
                    <li>Like</li>
                    <li>Review/Rating</li>
                    <li>Subscription</li>
                    <li>Download</li>
                </ul>
          </ul>
<br> <h3> White Hat SEO:</h3>
<ul> <li> Usually called as 'Ethical SEO'</li>
               <li> Used for a long-term investment</li>
               <li> Usage of optimisation strategies, techniques and tactics</li>
               <li> Focuses on a human audience opposed to search engines</li>
               <li> Completely follows search engine rules and policies</li>
               <li> White Hat SEO uses the following techniques:</li>
               <ul> <li>Keywords/Keyword analysis</li>
                    <li>Backlinking</li>
                    <li>Link Building in order to increase the popularity of the link</li>
                    <li>Writing content for human readers</li>
               </ul>
          </ul>
<br> <h3> Black Hat SEO:</h3>
<ul> <li> Usage of aggressive SEO strategies, techniques and tactics</li>
               <li> Focuses on only on search engines and not a human audience</li>
               <li> Usually does not obey search engines guidelines</li>
               <li> Black Hat SEO uses the following techniques:</li>
               <ul> <li>Keyword Stuffing</li>
                    <ul> <li>Repeating the keywords many times in the meta-tags</li> </ul>
                    <li>Invisible Texts</li>
                    <ul> <li>In background colour</li>
                         <li>Off Screen</li>
                         <li>In comment tags</li>
                         <li>Invisible divs</li> </ul>
                    <li>Link Farms</li>
                    <li>Spamdexing</li>
                    <li>Cloaking</li> </ul> 
               </ul>
</div>
</link>
</body>

</html>