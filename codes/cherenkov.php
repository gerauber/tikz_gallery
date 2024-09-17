\usepackage{tkz-euclide}
...
\begin{tikzpicture}
    \tkzDefPoints{0/0/pi, 2/0/pint, 9/0/pf, 3/0/pt1, 8/0/pt2, 4.8/2.4/pt3, 4.8/-2.4/pt4}
    \draw[draw=black, -latex, thick] (pi) -- (pint);
    \draw[draw=black, -latex, thick] (pint) -- (pf);
    \draw[draw=black, thick] (pt1) -- (pt3);
    \draw[draw=black, thick] (pt3) -- (pt2);
    \draw[draw=black, thick] (pt1) -- (pt4);
    \draw[draw=black, thick] (pt4) -- (pt2);
    \tkzMarkRightAngle[draw=black,size=.4](pt1,pt3,pt2);
    \tkzMarkRightAngle[draw=black,size=.4](pt1,pt4,pt2);
    \pic [draw, -, "$\theta$", angle eccentricity=1.2, angle radius=1cm] {angle = pf--pt1--pt3};
    \tkzLabelPoint[right=1cm, yshift=-0.3cm](pi){$\frac{c}{n} < v < c$}
    \tkzLabelPoint[right=0cm, yshift=-0.3cm](0, 3){Refractive index: $n$}
    \foreach \xa in {0, 1, 2, 3, 4, 5, 6, 7, 8}{
        \def\valx{\xa*0.4}
        \def\valy{\xa*0.3}
        \tkzDefPoint(4.9+\valx,2.5-\valy){f1}
        \tkzDefPoint(5.5+\valx,3.2-\valy){f2}
        \draw[draw=black, -latex, thick] (f1) -- (f2);
        \tkzDefPoint(4.9+\valx,-2.5+\valy){f1}
        \tkzDefPoint(5.5+\valx,-3.2+\valy){f2}
        \draw[draw=black, -latex, thick] (f1) -- (f2);
    }
    \node[rotate=53.13] at (3.6,1.3) {$x = \frac{c}{n}t$};
    \node[] at (5.4,-0.3) {$h = vt = \beta c t$};
\end{tikzpicture}