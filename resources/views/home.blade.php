@extends('layouts.app')

@section('content')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body"></div>
    </div>
</div>

<section>
    <div class="gap100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="forum-warper">
                        <div class="post-filter-sec">
                            <form method="post" class="filter-form">
                                <input type="post" placeholder="Search post">
                                <button><i class="ti-search"></i></button>
                            </form>
                            <div class="purify">
                                <span>filter by</span>
                                <select>
                                    <option>Assending A-Z</option>
                                    <option>Desending Z-A</option>
                                    <option>Desending (date)</option>
                                    <option>Asending (date)</option>
                                </select>
                                <a href="#" title="">purify</a>
                            </div>
                        </div>
                        <a class="addnewforum" href="forum-create-topic.html" title=""><i class="fa fa-plus"></i> Add New</a>
                    </div>
                    <div class="forum-list">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">forum</th>
                                    <th scope="col">topics</th>
                                    <th scope="col">posts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <i class="fa fa-comments"></i>
                                        <a href="forums-category.html" title="">Asset for creating a beautiful website</a>
                                        <p>list your recommended website and when you start to create your website so please check your laptop window and battery &#58;-&#41;</p>
                                    </td>
                                    <td>4</td>
                                    <td>5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{--<div class="col-lg-3">
                    <aside class="sidebar full-style">
                        <div class="widget">
                            <h4 class="widget-title">Forum Statistics</h4>
                            <ul class="forum-static">
                                <li>
                                    <a href="#" title="">Forums</a>
                                    <span>13</span>
                                </li>
                                <li>
                                    <a href="#" title="">Registered Users</a>
                                    <span>50</span>
                                </li>
                                <li>
                                    <a href="#" title="">Topics</a>
                                    <span>14</span>
                                </li>
                                <li>
                                    <a href="#" title="">Replies</a>
                                    <span>32</span>
                                </li>
                                <li>
                                    <a href="#" title="">Topic Tags</a>
                                    <span>50</span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Recent Topics</h4>
                            <ul class="recent-topics">
                                <li>
                                    <a href="#" title="">The new Goddess of War trailer was launched at E3!</a>
                                    <span>2 hours, 16 minutes ago</span>
                                    <i>The Community</i>
                                </li>
                                <li>
                                    <a href="#" title="">The new Goddess of War trailer was launched at E3!</a>
                                    <span>2 hours, 16 minutes ago</span>
                                    <i>The Community</i>
                                </li>
                                <li>
                                    <a href="#" title="">The new Goddess of War trailer was launched at E3!</a>
                                    <span>2 hours, 16 minutes ago</span>
                                    <i>The Community</i>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Featured Topics</h4>
                            <ul class="feature-topics">
                                <li>
                                    <i class="fa fa-star"></i>
                                    <a href="#" title="">What is your favourit season in summer?</a>
                                    <span>2 hours, 16 minutes ago</span>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                    <a href="#" title="">The new Goddess of War trailer was launched at E3!</a>
                                    <span>2 hours, 16 minutes ago</span>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                    <a href="#" title="">Summer is Coming! Picnic in the east boulevard park</a>
                                    <span>2 hours, 16 minutes ago</span>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>--}}
            </div>
        </div>
    </div>
</section>
@endsection
