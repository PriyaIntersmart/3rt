  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          {{-- <li class="nav-item">
              <a class="nav-link " href="index.html">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav --> --}}

          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                  <i class="ri-home-2-fill"></i><span>HOME</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="tables-nav"
                  class="nav-content collapse {{ Nav::isRoute(['home-cms.edit', 'home-banner.edit','count-setting.index','count-setting.edit'], 'show') }}"
                  data-bs-parent="#sidebar-nav">
                  <li>
                  <li>
                      <a href="{{ route('home-cms.edit') }}" class="{{ Nav::isRoute('home-cms.edit') }}">
                          <i class="bi bi-circle"></i><span>CMS</span>
                      </a>
                  </li>
                  <a href="{{ route('home-banner.edit') }}" class="{{ Nav::isRoute('home-banner.edit') }}">
                      <i class="bi bi-circle"></i><span> Banner Management</span>
                  </a>
          </li>
          <li>
            <a href="{{ route('count-setting.index') }}" class="{{ Nav::isResource('count-setting') }}">
                <i class="bi bi-circle"></i><span>Count Managment</span>
            </a>
        </li>

      </ul>
      </li>

      <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#about_nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-journal-text"></i><span>ABOUT</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="about_nav"
              class="nav-content collapse {{ Nav::isRoute(['about-cms.edit', 'team-management.index','team-management.create','team-management.edit', 'mining_cms.edit', 'mining-process.index',
            'mining-process.create','mining-process.edit'], 'show') }}"
              data-bs-parent="#sidebar-nav">
              <li>
              <li>
                  <a href="{{ route('about-cms.edit') }}" class="{{ Nav::isRoute('about-cms.edit') }}">
                      <i class="bi bi-circle"></i><span>CMS</span>
                  </a>
              </li>

              <li>
                  <a href="{{ route('team-management.index') }}" class="{{ Nav::isResource('team-management') }}">
                      <i class="bi bi-circle"></i><span>Team</span>
                  </a>
              </li>

              <li>
                  <a href="{{ route('mining_cms.edit') }}" class="{{ Nav::isRoute('mining_cms.edit') }}">
                      <i class="bi bi-circle"></i><span>Mining Cms</span>
                  </a>
              </li>

              <li>
                  <a href="{{ route('mining-process.index') }}" class="{{ Nav::isResource('mining-process') }}">
                      <i class="bi bi-circle"></i><span>Mining Process</span>
                  </a>
              </li>


      </li>
      </ul>

      <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#structure_nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Structure OverView</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="structure_nav" class="nav-content collapse {{ Nav::isRoute(['key-element.index','structure-overview.edit','key-element.index','key-element.edit'], 'show') }}"
              data-bs-parent="#sidebar-nav">

              <li>
                  <a href="{{ route('key-element.index') }}" class="{{ Nav::isResource('key-element') }}">
                      <i class="bi bi-circle"></i><span>Key Element Management</span>
                  </a>
              </li>
              <li>
                <a href="{{ route('structure-overview.edit') }}" class="{{ Nav::isRoute('structure-overview.edit') }}">
                    <i class="bi bi-circle"></i><span>Structure Overview Cms</span>
                </a>
            </li>




          </ul>
      </li>


      <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#contact-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-envelope"></i><span>CONTACT</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="contact-nav" class="nav-content collapse {{ Nav::isResource('location', 'show') }}"
              data-bs-parent="#sidebar-nav">
              <li>
              <li>
                  <a href="{{ route('location.index') }}" class="{{ Nav::isResource('location') }}">
                      <i class="bi bi-circle"></i><span>Location Management</span>
                  </a>
              </li>

      </li>
      </ul>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#newsevents" data-bs-toggle="collapse" href="#">
            <i class="bi bi-newspaper"></i><span>NewsEvents</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="newsevents" class="nav-content collapse {{ Nav::isResource('news-events', 'show') }}"
            data-bs-parent="#sidebar-nav">
            <li>
            <li>
                <a href="{{ route('news-events.index') }}" class="{{ Nav::isResource('news-events') }}">
                    <i class="bi bi-circle"></i><span>News Management</span>
                </a>
            </li>
            <li>
                <a href="{{ route('news-events-cms.edit') }}" class="{{ Nav::isRoute('news-events-cms.edit') }}">
                    <i class="bi bi-circle"></i><span>CMS</span>
                </a>
            </li>
            </li>
        </ul>

    </li>
      <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#cms-nav" data-bs-toggle="collapse" href="#">
              <i class="ri-settings-2-fill"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="cms-nav"
              class="nav-content collapse {{ Nav::isRoute(['bannerandmetatag.index', 'site-common-content.edit', 'admin-config.index', 'terms-and-condition.edit', 'privacy-policy.edit'], 'show') }}"
              data-bs-parent="#sidebar-nav">
              <li>
                <a href="{{ route('address-management.index') }}"
                    class="{{ Nav::isRoute('address-management.index') }}">
                    <i class="bi bi-circle"></i><span>Address Managemnet</span>
                </a>
            </li>
              <li>
                  <a href="{{ route('bannerandmetatag.index') }}"
                      class="{{ Nav::isRoute('bannerandmetatag.index') }}">
                      <i class="bi bi-circle"></i><span>Banner and Meta Tags</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('site-common-content.edit') }}"
                      class="{{ Nav::isRoute('site-common-content.edit') }}">
                      <i class="bi bi-circle"></i><span>Site Common Content</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('admin-config.index') }}" class="{{ Nav::isRoute('admin-config.index') }}">
                      <i class="bi bi-circle"></i><span>Admin Configuration</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('terms-and-condition.edit') }}"
                      class="{{ Nav::isRoute('terms-and-condition.editx') }}">
                      <i class="bi bi-circle"></i><span>Terms and condition</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('privacy-policy.edit') }}" class={{ Nav::isRoute('privacy-policy.edit') }}>
                      <i class="bi bi-circle"></i><span>Privacy Policy</span>
                  </a>
              </li>
          </ul>
      </li><!-- End Tables Nav -->









      <!-- End Tables Nav -->




      </ul>

  </aside><!-- End Sidebar-->
