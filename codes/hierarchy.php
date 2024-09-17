\usepackage{tkz-euclide}
\usepackage{amsmath}
...
\definecolor{n_red}{HTML}{ce655f}
\definecolor{n_blue}{HTML}{6095c9}
\definecolor{n_green}{HTML}{aac46d}

\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \tkzDefPoint(0.5,-0.5){h11}
    \tkzDefPoint(5,6.5){h12}
    \draw[fill=white] (h11) rectangle (h12);

    \tkzDefPoint(0,0){ax1}
    \tkzDefPoint(0,6){ax2}
    \draw[draw=black, -latex, thick] (ax1) -- (ax2);
    \tkzLabelPoint[right=-0.7cm, yshift=0cm](ax2){$m^2$}

    \fill[fill=white] (0.5, 6) rectangle (h12) node[align=center, pos=.5, text width=5cm] {Normal hierarchy};
    \draw[color=black] (h11) rectangle (h12);

    \def\hbar{5}
    \def\lrb{1.3}
    \def\lbg{2.65}
    \tkzDefPoint(1,\hbar){b1up1}
    \tkzDefPoint(\lrb,\hbar+0.3){b1upr}
    \tkzDefPoint(\lbg,\hbar){b1upb}
    \tkzDefPoint(4.05,\hbar+0.3){b1up2}
    \fill[fill=n_red] (b1up1) rectangle (b1upr);
    \fill[fill=n_blue] (b1upr) rectangle (b1upb);
    \fill[fill=n_green] (b1upb) rectangle (b1up2);
    \draw[draw=black] (\lbg,\hbar+0.3) -- (\lbg,\hbar);
    \draw[draw=black] (\lrb,\hbar+0.3) -- (\lrb,\hbar);
    \draw (b1up1) rectangle (b1up2) node[align=center, pos=.5, text width=1.8cm] {};
    \fill[fill=white] (4.05, \hbar) rectangle (4.5, \hbar+0.3) node[align=center, pos=.5, text width=5cm] {$\nu_3$};

    \def\lrb{1.9}
    \def\lbg{2.95}
    \def\ya{3.5}
    \tkzDefPoint(1,\hbar-\ya){b1up1}
    \tkzDefPoint(\lrb,\hbar+0.3-\ya){b1upr}
    \tkzDefPoint(\lbg,\hbar-\ya){b1upb}
    \tkzDefPoint(4,\hbar+0.3-\ya){b1up2}
    \fill[fill=n_red] (b1up1) rectangle (b1upr);
    \fill[fill=n_blue] (b1upr) rectangle (b1upb);
    \fill[fill=n_green] (b1upb) rectangle (b1up2);
    \draw[draw=black] (\lbg,\hbar+0.3-\ya) -- (\lbg,\hbar-\ya);
    \draw[draw=black] (\lrb,\hbar+0.3-\ya) -- (\lrb,\hbar-\ya);
    \draw (b1up1) rectangle (b1up2) node[align=center, pos=.5, text width=1.8cm] {};
    \fill[fill=white] (4.05, \hbar-\ya) rectangle (4.5, \hbar+0.3-\ya) node[align=center, pos=.5, text width=5cm] {$\nu_2$};

    \def\lrb{2.8}
    \def\lbg{3.4}
    \def\ya{4.5}
    \tkzDefPoint(1,\hbar-\ya){b1up1}
    \tkzDefPoint(\lrb,\hbar+0.3-\ya){b1upr}
    \tkzDefPoint(\lbg,\hbar-\ya){b1upb}
    \tkzDefPoint(4,\hbar+0.3-\ya){b1up2}
    \fill[fill=n_red] (b1up1) rectangle (b1upr);
    \fill[fill=n_blue] (b1upr) rectangle (b1upb);
    \fill[fill=n_green] (b1upb) rectangle (b1up2);
    \draw[draw=black] (\lbg,\hbar+0.3-\ya) -- (\lbg,\hbar-\ya);
    \draw[draw=black] (\lrb,\hbar+0.3-\ya) -- (\lrb,\hbar-\ya);
    \draw (b1up1) rectangle (b1up2) node[align=center, pos=.5, text width=1.8cm] {};
    \fill[fill=white] (4.05, \hbar-\ya) rectangle (4.5, \hbar+0.3-\ya) node[align=center, pos=.5, text width=5cm] {$\nu_1$};

    \draw[draw=black, latex-latex, thick] (2.5, 5) -- (2.5, 1.8);
    \tkzLabelPoint[right=0cm, yshift=0cm](2.5, 3.4){$\Delta m^2_{\text{atm}}$}
    \draw[draw=black, latex-latex, thick] (2.5, 1.5) -- (2.5, 0.8);
    \tkzLabelPoint[right=0cm, yshift=0cm](2.5, 1.15){$\Delta m^2_{\text{sol}}$}


    \fill[fill=white] (1, 0) rectangle (\lrb, 0.4) node[align=center, pos=.5, text width=5cm] {\textcolor{n_red}{$\nu_e$}};
    \fill[fill=white] (\lrb, 0) rectangle (\lbg, 0.4) node[align=center, pos=.5, text width=5cm] {\textcolor{n_blue}{$\nu_\mu$}};
    \fill[fill=white] (\lbg, 0) rectangle (4, 0.4) node[align=center, pos=.5, text width=5cm] {\textcolor{n_green}{$\nu_\tau$}};

    %%%%%%%%%%%
    \tkzDefPoint(5.5,-0.5){h11}
    \tkzDefPoint(10,6.5){h12}
    \draw[fill=white] (h11) rectangle (h12);

    \def\invx{5}
    \def\hbar{5}
    \def\lrb{1.9}
    \def\lbg{2.95}
    \tkzDefPoint(1+\invx,\hbar){b1up1}
    \tkzDefPoint(\lrb+\invx,\hbar+0.3){b1upr}
    \tkzDefPoint(\lbg+\invx,\hbar){b1upb}
    \tkzDefPoint(4+\invx,\hbar+0.3){b1up2}
    \fill[fill=n_red] (b1up1) rectangle (b1upr);
    \fill[fill=n_blue] (b1upr) rectangle (b1upb);
    \fill[fill=n_green] (b1upb) rectangle (b1up2);
    \draw[draw=black] (\lbg+\invx,\hbar+0.3) -- (\lbg+\invx,\hbar);
    \draw[draw=black] (\lrb+\invx,\hbar+0.3) -- (\lrb+\invx,\hbar);
    \draw (b1up1) rectangle (b1up2) node[align=center, pos=.5, text width=1.8cm] {};
    \fill[fill=white] (4.05+\invx, \hbar) rectangle (4.5+\invx, \hbar+0.3) node[align=center, pos=.5, text width=5cm] {$\nu_2$};

    \def\lrb{2.8}
    \def\lbg{3.4}
    \def\ya{1}
    \tkzDefPoint(1+\invx,\hbar-\ya){b1up1}
    \tkzDefPoint(\lrb+\invx,\hbar+0.3-\ya){b1upr}
    \tkzDefPoint(\lbg+\invx,\hbar-\ya){b1upb}
    \tkzDefPoint(4+\invx,\hbar+0.3-\ya){b1up2}
    \fill[fill=n_red] (b1up1) rectangle (b1upr);
    \fill[fill=n_blue] (b1upr) rectangle (b1upb);
    \fill[fill=n_green] (b1upb) rectangle (b1up2);
    \draw[draw=black] (\lbg+\invx,\hbar+0.3-\ya) -- (\lbg+\invx,\hbar-\ya);
    \draw[draw=black] (\lrb+\invx,\hbar+0.3-\ya) -- (\lrb+\invx,\hbar-\ya);
    \draw (b1up1) rectangle (b1up2) node[align=center, pos=.5, text width=1.8cm] {};
    \fill[fill=white] (4.05+\invx, \hbar-\ya) rectangle (4.5+\invx, \hbar+0.3-\ya) node[align=center, pos=.5, text width=5cm] {$\nu_1$};

    \def\lrb{1.3}
    \def\lbg{2.65}
    \def\ya{4.5}
    \tkzDefPoint(1+\invx,\hbar-\ya){b1up1}
    \tkzDefPoint(\lrb+\invx,\hbar+0.3-\ya){b1upr}
    \tkzDefPoint(\lbg+\invx,\hbar-\ya){b1upb}
    \tkzDefPoint(4+\invx,\hbar+0.3-\ya){b1up2}
    \fill[fill=n_red] (b1up1) rectangle (b1upr);
    \fill[fill=n_blue] (b1upr) rectangle (b1upb);
    \fill[fill=n_green] (b1upb) rectangle (b1up2);
    \draw[draw=black] (\lbg+\invx,\hbar+0.3-\ya) -- (\lbg+\invx,\hbar-\ya);
    \draw[draw=black] (\lrb+\invx,\hbar+0.3-\ya) -- (\lrb+\invx,\hbar-\ya);
    \draw (b1up1) rectangle (b1up2) node[align=center, pos=.5, text width=1.8cm] {};
    \fill[fill=white] (4.05+\invx, \hbar-\ya) rectangle (4.5+\invx, \hbar+0.3-\ya) node[align=center, pos=.5, text width=5cm] {$\nu_3$};

    \fill[fill=white] (1+\invx, 0) rectangle (\lrb+\invx, 0.4) node[align=center, pos=.5, text width=5cm] {\textcolor{n_red}{$\nu_e$}};
    \fill[fill=white] (\lrb+\invx, 0) rectangle (\lbg+\invx, 0.4) node[align=center, pos=.5, text width=5cm] {\textcolor{n_blue}{$\nu_\mu$}};
    \fill[fill=white] (\lbg+\invx, 0) rectangle (4+\invx, 0.4) node[align=center, pos=.5, text width=5cm] {\textcolor{n_green}{$\nu_\tau$}};

    \draw[draw=black, latex-latex, thick] (2.5+\invx, 5) -- (2.5+\invx, 4.3);
    \tkzLabelPoint[right=0cm, yshift=0cm](2.5+\invx, 4.65){$\Delta m^2_{\text{sol}}$}
    \draw[draw=black, latex-latex, thick] (1.5+\invx, 5) -- (1.5+\invx, 0.8);
    \tkzLabelPoint[right=0cm, yshift=0cm](1.5+\invx, 2.9){$\Delta m^2_{\text{atm}}$}

    \fill[fill=white] (5.5, 6) rectangle (h12) node[align=center, pos=.5, text width=5cm] {Inverted hierarchy};
    \draw[color=black] (h11) rectangle (h12);

    \tkzDefPoint(10.5,0){ax1}
    \tkzDefPoint(10.5,6){ax2}
    \draw[draw=black, -latex, thick] (ax1) -- (ax2);
    \tkzLabelPoint[right=0.05cm, yshift=0cm](ax2){$m^2$}
\end{tikzpicture}