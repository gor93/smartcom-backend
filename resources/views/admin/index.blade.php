@include('admin._header')

<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
<div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="element-wrapper">
                                <div class="element-actions">
                                    <form class="form-inline justify-content-sm-end">
                                        <select class="form-control form-control-sm rounded">
                                            <option value="Pending">Today</option>
                                            <option value="Active">Last Week</option>
                                            <option value="Cancelled">Last 30 Days</option>
                                        </select>
                                    </form>
                                </div>
                                <h6 class="element-header">Sales Dashboard</h6>
                                <div class="element-content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="element-box el-tablo">
                                                <div class="label">Products Sold</div>
                                                <div class="value">57</div>
                                                <div class="trending trending-up"><span>12%</span><i
                                                            class="os-icon os-icon-arrow-up2"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="element-box el-tablo">
                                                <div class="label">Gross Profit</div>
                                                <div class="value">$457</div>
                                                <div class="trending trending-down-basic"><span>12%</span><i
                                                            class="os-icon os-icon-arrow-2-down"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="element-box el-tablo">
                                                <div class="label">New Customers</div>
                                                <div class="value">125</div>
                                                <div class="trending trending-down-basic"><span>9%</span><i
                                                            class="os-icon os-icon-graph-down"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="element-wrapper">
                                <h6 class="element-header">New Orders</h6>
                                <div class="element-box">
                                    <div class="table-responsive">
                                        <table class="table table-lightborder">
                                            <thead>
                                            <tr>
                                                <th>Customer Name</th>
                                                <th>Products Ordered</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-right">Order Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="nowrap">John Mayers</td>
                                                <td>
                                                    <div class="cell-image-list">
                                                        <div class="cell-img"
                                                             style="background-image: {{ asset('assets/admin/img/portfolio9.jpg)') }}"></div>
                                                        <div class="cell-img"
                                                             style="background-image: {{ asset('assets/admin/img/portfolio2.jpg)') }}"></div>
                                                        <div class="cell-img"
                                                             style="background-image: {{ asset('assets/admin/img/portfolio12.jpg)') }}"></div>
                                                        <div class="cell-img-more">+ 5 more</div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="text-right">$354</td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap">Kelly Brans</td>
                                                <td>
                                                    <div class="cell-image-list">
                                                        <div class="cell-img"
                                                             style="background-image: {{ asset('assets/admin/img/portfolio14.jpg)') }}"></div>
                                                        <div class="cell-img"
                                                             style="background-image: {{ asset('assets/admin/img/portfolio8.jpg)') }}"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="status-pill red" data-title="Cancelled"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="text-right">$94</td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap">Tim Howard</td>
                                                <td>
                                                    <div class="cell-image-list">
                                                        <div class="cell-img"
                                                             style="background-image: {{ asset('assets/admin/img/portfolio16.jpg)') }}"></div>
                                                        <div class="cell-img"
                                                             style="background-image: {{ asset('assets/admin/img/portfolio14.jpg)') }}"></div>
                                                        <div class="cell-img"
                                                             style="background-image: {{ asset('assets/admin/img/portfolio5.jpg)') }}"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="text-right">$156</td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap">Joe Trulli</td>
                                                <td>
                                                    <div class="cell-image-list">
                                                        <div class="cell-img"
                                                             style="background-image: {{ asset('assets/admin/img/portfolio1.jpg)') }}"></div>
                                                        <div class="cell-img"
                                                             style="background-image: {{ asset('assets/admin/img/portfolio5.jpg)') }}"></div>
                                                        <div class="cell-img"
                                                             style="background-image: {{ asset('assets/admin/img/portfolio6.jpg)') }}"></div>
                                                        <div class="cell-img-more">+ 2 more</div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="status-pill yellow" data-title="Pending"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="text-right">$1,120</td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap">Jerry Lingard</td>
                                                <td>
                                                    <div class="cell-image-list">
                                                        <div class="cell-img"
                                                             style="background-image: {{ asset('assets/admin/img/portfolio9.jpg)') }}"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="text-right">$856</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="element-wrapper">
                                <h6 class="element-header">Top Selling Today</h6>
                                <div class="element-box">
                                    <div class="el-chart-w">
                                        <canvas height="120" id="donutChart" width="120"></canvas>
                                        <div class="inside-donut-chart-label">
                                            <strong>142</strong><span>Total Orders</span></div>
                                    </div>
                                    <div class="el-legend">
                                        <div class="legend-value-w">
                                            <div class="legend-pin" style="background-color: #6896f9;"></div>
                                            <div class="legend-value">Processed</div>
                                        </div>
                                        <div class="legend-value-w">
                                            <div class="legend-pin" style="background-color: #85c751;"></div>
                                            <div class="legend-value">Cancelled</div>
                                        </div>
                                        <div class="legend-value-w">
                                            <div class="legend-pin" style="background-color: #d97b70;"></div>
                                            <div class="legend-value">Pending</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="element-wrapper">
                                <h6 class="element-header">Unique Visitors Graph</h6>
                                <div class="element-box">
                                    <div class="os-tabs-w">
                                        <div class="os-tabs-controls">
                                            <ul class="nav nav-tabs smaller">
                                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                                        href="#tab_overview">Overview</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                                        href="#tab_sales">Sales</a></li>
                                            </ul>
                                            <ul class="nav nav-pills smaller hidden-sm-down">
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">Today</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                                        href="#">7 Days</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">14
                                                        Days</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">Last
                                                        Month</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_overview">
                                                <div class="el-tablo">
                                                    <div class="label">Unique Visitors</div>
                                                    <div class="value">12,537</div>
                                                </div>
                                                <div class="el-chart-w">
                                                    <canvas height="150px" id="lineChart" width="600px"></canvas>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab_sales"></div>
                                            <div class="tab-pane" id="tab_conversion"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="element-wrapper">
                                <h6 class="element-header">Recent Orders</h6>
                                <div class="element-box-tp">
                                    <div class="controls-above-table">
                                        <div class="row">
                                            <div class="col-sm-6"><a class="btn btn-sm btn-secondary" href="#">Download
                                                    CSV</a><a class="btn btn-sm btn-secondary" href="#">Archive</a><a
                                                        class="btn btn-sm btn-danger" href="#">Delete</a></div>
                                            <div class="col-sm-6">
                                                <form class="form-inline justify-content-sm-end">
                                                    <input class="form-control form-control-sm rounded bright"
                                                           placeholder="Search" type="text">
                                                    <select class="form-control form-control-sm rounded bright">
                                                        <option selected="selected" value="">Select Status</option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Cancelled">Cancelled</option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-lg table-v2 table-striped">
                                            <thead>
                                            <tr>
                                                <th class="text-center"><input class="form-control" type="checkbox">
                                                </th>
                                                <th>Customer Name</th>
                                                <th>Country</th>
                                                <th>Order Total</th>
                                                <th>Referral</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center"><input class="form-control" type="checkbox">
                                                </td>
                                                <td>John Mayers</td>
                                                <td><img alt="" src="{{ asset('assets/admin/img/flags-icons/us.png') }}" width="25px"></td>
                                                <td class="text-right">$245</td>
                                                <td>Organic</td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-pencil-2"></i></a><a href="#"><i
                                                                class="os-icon os-icon-link-3"></i></a><a class="danger"
                                                                                                          href="#"><i
                                                                class="os-icon os-icon-database-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-control" type="checkbox">
                                                </td>
                                                <td>Mike Astone</td>
                                                <td><img alt="" src="{{ asset('assets/admin/img/flags-icons/fr.png') }}" width="25px"></td>
                                                <td class="text-right">$154</td>
                                                <td>Organic</td>
                                                <td class="text-center">
                                                    <div class="status-pill red" data-title="Cancelled"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-pencil-2"></i></a><a href="#"><i
                                                                class="os-icon os-icon-link-3"></i></a><a class="danger"
                                                                                                          href="#"><i
                                                                class="os-icon os-icon-database-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-control" type="checkbox">
                                                </td>
                                                <td>Kira Knight</td>
                                                <td><img alt="" src="{{ asset('assets/admin/img/flags-icons/us.png') }}" width="25px"></td>
                                                <td class="text-right">$23</td>
                                                <td>Adwords</td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-pencil-2"></i></a><a href="#"><i
                                                                class="os-icon os-icon-link-3"></i></a><a class="danger"
                                                                                                          href="#"><i
                                                                class="os-icon os-icon-database-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-control" type="checkbox">
                                                </td>
                                                <td>Jessica Bloom</td>
                                                <td><img alt="" src="{{ asset('assets/admin/img/flags-icons/ca.png') }}" width="25px"></td>
                                                <td class="text-right">$112</td>
                                                <td>Organic</td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-pencil-2"></i></a><a href="#"><i
                                                                class="os-icon os-icon-link-3"></i></a><a class="danger"
                                                                                                          href="#"><i
                                                                class="os-icon os-icon-database-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-control" type="checkbox">
                                                </td>
                                                <td>Gary Lineker</td>
                                                <td><img alt="" src="{{ asset('assets/admin/img/flags-icons/ca.png') }}" width="25px"></td>
                                                <td class="text-right">$64</td>
                                                <td>Organic</td>
                                                <td class="text-center">
                                                    <div class="status-pill yellow" data-title="Pending"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-pencil-2"></i></a><a href="#"><i
                                                                class="os-icon os-icon-link-3"></i></a><a class="danger"
                                                                                                          href="#"><i
                                                                class="os-icon os-icon-database-remove"></i></a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="controls-below-table">
                                        <div class="table-records-info">Showing records 1 - 5</div>
                                        <div class="table-records-pages">
                                            <ul>
                                                <li><a href="#">Previous</a></li>
                                                <li><a class="current" href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------
                       START - Chat Popup Box
                       -------------------->
                    <div class="floated-chat-btn"><i class="os-icon os-icon-mail-07"></i><span>Demo Chat</span></div>
                    <div class="floated-chat-w">
                        <div class="floated-chat-i">
                            <div class="chat-close"><i class="os-icon os-icon-close"></i></div>
                            <div class="chat-head">
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="{{ asset('assets/admin/img/avatar1.jpg') }}"></div>
                                    </div>
                                    <div class="user-name">
                                        <h6 class="user-title">John Mayers</h6>
                                        <div class="user-role">Account Manager</div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-messages">
                                <div class="message">
                                    <div class="message-content">Hi, how can I help you?</div>
                                </div>
                                <div class="date-break">Mon 10:20am</div>
                                <div class="message">
                                    <div class="message-content">Hi, my name is Mike, I will be happy to assist you
                                    </div>
                                </div>
                                <div class="message self">
                                    <div class="message-content">Hi, I tried ordering this product and it keeps showing
                                        me error code.
                                    </div>
                                </div>
                            </div>
                            <div class="chat-controls">
                                <input class="message-input" placeholder="Type your message here..." type="text">
                                <div class="chat-extra"><a href="#"><span class="extra-tooltip">Attach Document</span><i
                                                class="os-icon os-icon-documents-07"></i></a><a href="#"><span
                                                class="extra-tooltip">Insert Photo</span><i
                                                class="os-icon os-icon-others-29"></i></a><a href="#"><span
                                                class="extra-tooltip">Upload Video</span><i
                                                class="os-icon os-icon-ui-51"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!--------------------
                       END - Chat Popup Box
                       -------------------->
                </div>
                <!--------------------
                   START - Sidebar
                   -------------------->
                <div class="content-panel">
                    <div class="content-panel-close"><i class="os-icon os-icon-close"></i></div>
                    <div class="element-wrapper">
                        <h6 class="element-header">Quick Links</h6>
                        <div class="element-box-tp">
                            <div class="el-buttons-list full-width"><a class="btn btn-white btn-sm" href="#"><i
                                            class="os-icon os-icon-delivery-box-2"></i><span>Create New Product</span></a><a
                                        class="btn btn-white btn-sm" href="#"><i
                                            class="os-icon os-icon-window-content"></i><span>Customer Comments</span></a><a
                                        class="btn btn-white btn-sm" href="#"><i
                                            class="os-icon os-icon-wallet-loaded"></i><span>Store Settings</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="element-wrapper">
                        <h6 class="element-header">Support Agents</h6>
                        <div class="element-box-tp">
                            <div class="profile-tile">
                                <div class="profile-tile-box">
                                    <div class="pt-avatar-w"><img alt="" src="{{ asset('assets/admin/img/avatar1.jpg') }}"></div>
                                    <div class="pt-user-name">Mark Parson</div>
                                </div>
                                <div class="profile-tile-meta">
                                    <ul>
                                        <li>Last Login:<strong>Online Now</strong></li>
                                        <li>Tickets:<strong>12</strong></li>
                                        <li>Response Time:<strong>2 hours</strong></li>
                                    </ul>
                                    <div class="pt-btn"><a class="btn btn-success btn-sm" href="#">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-tile">
                                <div class="profile-tile-box">
                                    <div class="pt-avatar-w"><img alt="" src="{{ asset('assets/admin/img/avatar3.jpg') }}"></div>
                                    <div class="pt-user-name">John Mayers</div>
                                </div>
                                <div class="profile-tile-meta">
                                    <ul>
                                        <li>Last Login:<strong>Online Now</strong></li>
                                        <li>Tickets:<strong>9</strong></li>
                                        <li>Response Time:<strong>3 hours</strong></li>
                                    </ul>
                                    <div class="pt-btn"><a class="btn btn-secondary btn-sm" href="#">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-wrapper">
                        <h6 class="element-header">Recent Activity</h6>
                        <div class="element-box-tp">
                            <div class="activity-boxes-w">
                                <div class="activity-box-w">
                                    <div class="activity-time">10 Min</div>
                                    <div class="activity-box">
                                        <div class="activity-avatar"><img alt="" src="{{ asset('assets/admin/img/avatar1.jpg') }}"></div>
                                        <div class="activity-info">
                                            <div class="activity-role">Mark Pearson</div>
                                            <strong class="activity-title">Opened New Account</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="activity-box-w">
                                    <div class="activity-time">2 Hours</div>
                                    <div class="activity-box">
                                        <div class="activity-avatar"><img alt="" src="{{ asset('assets/admin/img/avatar2.jpg') }}"></div>
                                        <div class="activity-info">
                                            <div class="activity-role">John Mayers</div>
                                            <strong class="activity-title">Posted Comment</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="activity-box-w">
                                    <div class="activity-time">5 Hours</div>
                                    <div class="activity-box">
                                        <div class="activity-avatar"><img alt="" src="{{ asset('assets/admin/img/avatar3.jpg') }}"></div>
                                        <div class="activity-info">
                                            <div class="activity-role">Kate Wallet</div>
                                            <strong class="activity-title">Opened New Account</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="activity-box-w">
                                    <div class="activity-time">2 Days</div>
                                    <div class="activity-box">
                                        <div class="activity-avatar"><img alt="" src="{{ asset('assets/admin/img/avatar4.jpg') }}"></div>
                                        <div class="activity-info">
                                            <div class="activity-role">Monica Bonak</div>
                                            <strong class="activity-title">Uploaded Image</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-wrapper">
                        <h6 class="element-header">Team Members</h6>
                        <div class="element-box-tp">
                            <div class="input-search-w"><input class="form-control rounded bright"
                                                               placeholder="Search team members..." type="search"></div>
                            <div class="users-list-w">
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="{{ asset('assets/admin/img/avatar1.jpg') }}"></div>
                                    </div>
                                    <div class="user-name">
                                        <h6 class="user-title">John Mayers</h6>
                                        <div class="user-role">Account Manager</div>
                                    </div>
                                    <div class="user-action">
                                        <div class="os-icon os-icon-email-forward"></div>
                                    </div>
                                </div>
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="{{ asset('assets/admin/img/avatar1.jpg') }}"></div>
                                    </div>
                                    <div class="user-name">
                                        <h6 class="user-title">Ben Gossman</h6>
                                        <div class="user-role">Administrator</div>
                                    </div>
                                    <div class="user-action">
                                        <div class="os-icon os-icon-email-forward"></div>
                                    </div>
                                </div>
                                <div class="user-w with-status status-red">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="{{ asset('assets/admin/img/avatar1.jpg') }}"></div>
                                    </div>
                                    <div class="user-name">
                                        <h6 class="user-title">Phil Nokorin</h6>
                                        <div class="user-role">HR Manger</div>
                                    </div>
                                    <div class="user-action">
                                        <div class="os-icon os-icon-email-forward"></div>
                                    </div>
                                </div>
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="{{ asset('assets/admin/img/avatar1.jpg') }}"></div>
                                    </div>
                                    <div class="user-name">
                                        <h6 class="user-title">Jenny Miksa</h6>
                                        <div class="user-role">Lead Developer</div>
                                    </div>
                                    <div class="user-action">
                                        <div class="os-icon os-icon-email-forward"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--------------------
                   END - Sidebar
                   -------------------->
            </div>

@include('admin._footer')